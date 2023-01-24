<?php

namespace App\Http\Controllers;
use App\Http\Requests\GeninfoRequest;
use App\Models\User;
use App\Models\NewsModel;
use Auth;
use DataTables;
use Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;


class NewsController extends Controller
{
    
       public function index(): View
    {
        $data['data'] = NewsModel::all()->sortByDesc("id");
    return view('admin.page.newsandblog.newsinfo',$data);


    }




    public function addnews(): View
    {
        
        return view('admin.page.newsandblog.addnews');
    }
        public function addnewsdata(Request $request): mixed
    {
       
                $validator = Validator::make($request->all(), [
            'img_news' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'lang' => 'required',
            'title' => 'required',
        ]);

 if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }


  try {


   $fileFormats = ['image/jpeg', 'image/png', 'image/gif'];

            if (!in_array($request->file('img_news')->getClientMimeType(), $fileFormats)) {
                return redirect()->back()->with('error', 'the file not image');
            }
        
                $imageName = time().$request->file('img_news')->getClientOriginalName().'.'.$request->file('img_news')->getClientOriginalExtension();

        // Public Folder
        $request->file('img_news')->move(public_path('site/images/blog/'), $imageName);


            $news = NewsModel::create([
                'details_news' => $request->details_news,
                'lang' => $request->lang,
                'title' => $request->title,
                'byname' => $request->byname,
                'desc_news' => $request->desc_news,
                'img_news'=>$imageName,
                'active'=>($request->active == 'on') ? 1 : 0 
                      
            ]);

     


            if ($news) {

                return redirect('admin/newsandblog')->with('success', 'New Slider created!');
            }

            return redirect('admin/newsandblog')->with('error', 'Failed to create new slider! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }



}

public function editnewsdata($id,Request $request ):mixed{
    $data['newsdata'] = NewsModel::findOrFail($id);

    if ($request->has('_token') && $data['newsdata']) {
    $validator = Validator::make($request->all(), [
            'img_news' => 'image|mimes:png,jpg,jpeg|max:2048',
            'lang' => 'required',
            'title' => 'required',
        ]);


               if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
$image = $request->file('img_news');
if ($image&& $image !== null) { 
 $fileFormats = ['image/jpeg', 'image/png', 'image/gif'];

            if (!in_array($request->file('img_news')->getClientMimeType(), $fileFormats)) {
                return redirect()->back()->with('error', 'the file not image');
            }
        
                $imageName = time().$request->file('img_news')->getClientOriginalName().'.'.$request->file('img_news')->getClientOriginalExtension();

        // Public Folder
        $request->file('img_news')->move(public_path('site/images/blog/'), $imageName);

     $data['newsdata']->img_news =  $imageName;



}

     $data['newsdata']->title =  $request->title;
     $data['newsdata']->desc_news =  $request->desc_news;
     $data['newsdata']->lang =  $request->lang;
     $data['newsdata']->details_news =  $request->details_news;
     $data['newsdata']->active = ($request->active == 'on') ? 1 : 0 ;
    $data['newsdata']->byname = $request->byname;



if($data['newsdata']->update()){
                return redirect('admin/newsandblog')->with('success', 'Slider Edited success!');}


    }

if ($data['newsdata']) {
              return view('admin.page.newsandblog.editnews',$data);

}else{
return redirect('admin/newsandblog')->with('error', 'Failed to Edit this slider! Try again.');

}

}

public function removenews(Request $request): mixed
{
    $skksk =false;
        $slidedata = NewsModel::findOrFail($request->id);
        if ($slidedata) {
        $skksk = $slidedata->delete();
        }


                return Response::json($skksk);

}





}
