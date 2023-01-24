<?php

namespace App\Http\Controllers;
use App\Http\Requests\GeninfoRequest;
use App\Models\User;
use App\Models\Slider;
use App\Models\AboutusModel;
use App\Models\GeneralinfoModel;
use App\Models\services;
use Auth;
use DataTables;
use Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;


class Generalinfo extends Controller
{
    
       public function index($lang=1): View
    {

        $sda['data']=GeneralinfoModel::where('typeofdata','!=','file')->where('lang',$lang)->get();
        $sda['Logo_footer'] = GeneralinfoModel::where('name','=','Logo_footer')->where('lang',$lang)->first();
        $sda['Logo'] = GeneralinfoModel::where('name','=','Logo')->where('lang',$lang)->first();

        return view('admin.geninfo',$sda);
    }




        public function savelogos(Request $request): mixed
    {
       
                $validator = Validator::make($request->all(), [
            'Logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'Logo_footer' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'idofcolomnlogo'=>'required',
            'idofcolomnlogofoter'=>'required'

        ]);

 if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

         $dataofdatalogo  = GeneralinfoModel::findOrFail($request->idofcolomnlogo);
         $dataofdatalogofooter  = GeneralinfoModel::findOrFail($request->idofcolomnlogofoter);
         if ($dataofdatalogo && $dataofdatalogofooter) {
          
   

  try {


   $fileFormats = ['image/jpeg', 'image/png', 'image/gif'];

            if (!in_array($request->file('Logo')->getClientMimeType(), $fileFormats)) {
                return redirect()->back()->with('error', 'the file not image');
            }
        
                $Logo = time().$request->file('Logo')->getClientOriginalName().'.'.$request->file('Logo')->getClientOriginalExtension();

        // Public Folder
        $request->file('Logo')->move(public_path('img/logo/'), $Logo);



   $fileFormats = ['image/jpeg', 'image/png', 'image/gif'];

            if (!in_array($request->file('Logo_footer')->getClientMimeType(), $fileFormats)) {
                return redirect()->back()->with('error', 'the file not image');
            }
        
                $Logo_footer = time().$request->file('Logo_footer')->getClientOriginalName().'.'.$request->file('Logo_footer')->getClientOriginalExtension();

        // Public Folder
        $request->file('Logo_footer')->move(public_path('img/logo/'), $Logo_footer);



 $dataofdatalogo->fileupload = $Logo;
$dataofdatalogofooter->fileupload = $Logo_footer;
$dataofdatalogo->update();
$dataofdatalogofooter->update();
            if ($dataofdatalogo) {

                return redirect('admin/generalinfo/1')->with('success', 'New logo created!');
            }

            return redirect('admin/generalinfo/1')->with('error', 'Failed to create new logo! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }
        }else{
            return redirect('admin/generalinfo/1')->with('error', 'Failed to create new logo! Try again.');

        }



}


   public function savegenral(Request $request): mixed
    {
       
                $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

 if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
$idofrequest =$request->id[0];
$textofrequest =$request->id[3];

         $dataofdata  = GeneralinfoModel::findOrFail($idofrequest);
         if ($dataofdata) {

  try {



 $dataofdata->valueoftext = $textofrequest;
$dataofdata->update();
            if ($dataofdata) {

                return Response::json('true');
            }

                return Response::json('false');
        } catch (\Exception $e) {
            $bug = $e->getMessage();
                return Response::json($bug);
        }
        }else{
                return Response::json('failed');

        }


}

    public function sliderinfo(): View
    {
$data['sliderdata'] = Slider::all()->sortByDesc("id");;
        
        return view('admin.page.slider.sliderinfo',$data);
    }

    public function addslider(): View
    {
        
        return view('admin.page.slider.addslider');
    }
        public function addnewsliderdata(Request $request): mixed
    {
       
                $validator = Validator::make($request->all(), [
            'img' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

 if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

  try {


   $fileFormats = ['image/jpeg', 'image/png', 'image/gif'];

            if (!in_array($request->file('img')->getClientMimeType(), $fileFormats)) {
                return redirect()->back()->with('error', 'the file not image');
            }
        
                $imageName = time().$request->file('img')->getClientOriginalName().'.'.$request->file('img')->getClientOriginalExtension();

        // Public Folder
        $request->file('img')->move(public_path('site/images/'), $imageName);



            // store user information
            $slide = Slider::create([
                'name' => $request->name,
                'lang' => $request->lang,
                'title' => $request->title,
                'desc_slide' => $request->desc,
                'type' => 0,
                'img'=>$imageName,
                'urlvideo'=>$request->urlvideo,
                'isavisable'=>($request->isavisable == 'on') ? 1 : 0 
                      
            ]);

     


            if ($slide) {

                return redirect('admin/sliderinfo')->with('success', 'New Slider created!');
            }

            return redirect('admin/sliderinfo')->with('error', 'Failed to create new slider! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }



}

public function editnewsliderdata($id,Request $request ):mixed{
    $data['slidedata'] = Slider::findOrFail($id);

    if ($request->has('_token') && $data['slidedata']) {

              $validator = Validator::make($request->all(), [
            'img' => 'image|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required',
            'lang' => 'required',
        ]);

               if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
$image = $request->file('img');
if ($image&& $image !== null) { 
 $fileFormats = ['image/jpeg', 'image/png', 'image/gif'];

            if (!in_array($request->file('img')->getClientMimeType(), $fileFormats)) {
                return redirect()->back()->with('error', 'the file not image');
            }
        
                $imageName = time().$request->file('img')->getClientOriginalName().'.'.$request->file('img')->getClientOriginalExtension();

        // Public Folder
        $request->file('img')->move(public_path('site/images/'), $imageName);

     $data['slidedata']->img =  $imageName;



}

     $data['slidedata']->name =  $request->name;
     $data['slidedata']->title =  $request->title;
     $data['slidedata']->lang =  $request->lang;
                    $data['slidedata']->urlvideo = $request->urlvideo;

     $data['slidedata']->desc_slide =  $request->desc;
     $data['slidedata']->isavisable = ($request->isavisable == 'on') ? 1 : 0 ;



if($data['slidedata']->update()){
                return redirect('admin/sliderinfo')->with('success', 'Slider Edited success!');}


    }

if ($data['slidedata']) {
              return view('admin.page.slider.editslider',$data);

}else{
return redirect('admin/sliderinfo')->with('error', 'Failed to Edit this slider! Try again.');

}

}

public function removeslider(Request $request): mixed
{
    $skksk =false;
        $slidedata = Slider::findOrFail($request->id);
        if ($slidedata) {
        $skksk = $slidedata->delete();
        }


                return Response::json($skksk);

}



    public function aboutus($lang=1): View
    {
$data['datasis']= AboutusModel::where('lang',$lang)->get()->first();
        return view('admin.page.aboutus',$data);
    }

    public function editaboutus($id,Request $request): mixed
    {
            $xxxx['datasis'] = AboutusModel::findOrFail($id);

    if ($request->has('_token') &&  $xxxx['datasis']) {


$image = $request->file('img_about');
if ($image&& $image !== null) { 
 $fileFormats = ['image/jpeg', 'image/png', 'image/gif'];

            if (!in_array($request->file('img_about')->getClientMimeType(), $fileFormats)) {
                return redirect()->back()->with('error', 'the file not image');
            }
        
                $imageName = time().$request->file('img_about')->getClientOriginalName().'.'.$request->file('img_about')->getClientOriginalExtension();

        // Public Folder
        $request->file('img_about')->move(public_path('site/images/about'), $imageName);

     $xxxx['datasis']->img_about =  $imageName;



}

     $xxxx['datasis']->aboutus_word =  $request->aboutus_word;
     $xxxx['datasis']->whoweare_word =  $request->whoweare_word;
     $xxxx['datasis']->ourvision_word =  $request->ourvision_word;
     $xxxx['datasis']->ourhistory_word =  $request->ourhistory_word;
     $xxxx['datasis']->aboutus_text =  $request->aboutus_text;
     $xxxx['datasis']->whoweare_text =  $request->whoweare_text;
     $xxxx['datasis']->ourvision_text =  $request->ourvision_text;
     $xxxx['datasis']->ourhistory_text = $request->ourhistory_text;



if($xxxx['datasis']->update()){
                return redirect('admin/aboutus/'.$xxxx['datasis']->lang)->with('success', 'Aboutus Edited success!');

    }else{
        return redirect('admin/aboutus/1')->with('error', 'Failed to Edit this about us! Try again.');

    }




}else{
return redirect('admin/aboutus/1')->with('error', 'Failed to Edit this abouuut us! Try again.');

}


    

    }
  










  public function services(): View
    {
$data['servicesdata'] = services::all()->sortByDesc("id");;
        
        return view('admin.page.services.services',$data);
    }

    public function addservices(): View
    {
        
        return view('admin.page.services.addservices');
    }
        public function addservicesdata(Request $request): mixed
    {
       

  try {





            // store user information
            $service = services::create([
                'name' => $request->name,
                'lang' => $request->lang,
                'title' => $request->title,
                'desc_service' => $request->desc,
                'type' => 0,
                'icon'=>$request->icon,
                'isavisable'=>($request->isavisable == 'on') ? 1 : 0 
                      
            ]);

     


            if ($service) {

                return redirect('admin/services')->with('success', 'New services created!');
            }

            return redirect('services')->with('error', 'Failed to create new service! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }



}

public function editservicesdata($id,Request $request ):mixed{
    $data['servicedata'] = services::findOrFail($id);

    if ($request->has('_token') && $data['servicedata']) {

              $validator = Validator::make($request->all(), [
            'name' => 'required',
            'lang' => 'required',
        ]);

               if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }




     $data['servicedata']->name =  $request->name;
     $data['servicedata']->title =  $request->title;
     $data['servicedata']->lang =  $request->lang;
     $data['servicedata']->icon =  $request->icon;
     $data['servicedata']->desc_service =  $request->desc;
     $data['servicedata']->isavisable = ($request->isavisable == 'on') ? 1 : 0 ;



if($data['servicedata']->update()){
                return redirect('admin/services')->with('success', 'services Edited success!');}


    }

if ($data['servicedata']) {
              return view('admin.page.services.editservices',$data);

}else{
return redirect('admin/services')->with('error', 'Failed to Edit this service! Try again.');

}

}

public function removeservice(Request $request): mixed
{
    $skksk =false;
        $servicedata = services::findOrFail($request->id);
        if ($servicedata) {
        $skksk = $servicedata->delete();
        }


                return Response::json($skksk);

}
































    public function newsandblog(): View
    {
        return view('admin.newsandblog');
    }

    public function contactus(): View
    {
        return view('admin.contactus');
    }


}
