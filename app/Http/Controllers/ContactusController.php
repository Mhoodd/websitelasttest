<?php

namespace App\Http\Controllers;
use App\Http\Requests\GeninfoRequest;
use App\Models\User;
use App\Models\AboutusModel;
use App\Models\GeneralinfoModel;
use App\Models\ContactUsModel;
use App\Models\services;
use Auth;
use DataTables;
use Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class ContactusController extends Controller
{
    
    public function index(): View
    {
$data['contacts'] = ContactUsModel::all()->sortByDesc("id");
        return view('admin.page.contactus.contacts',$data);
    }

    public function updatestatus($id ):mixed{

    $data['contactdata'] = ContactUsModel::findOrFail($id);
         $data['contactdata']->readornot = 0 ;
$skksk = $data['contactdata']->update();
                return Response::json($skksk);

}


public function addcontactsdata(Request $request ):mixed{


    if ($request->has('_token') ) {

              $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'

        ]);

               if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

  $contactdata = ContactUsModel::create([
                'name' => $request->name,
                'subject' => $request->subject,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
                'ipandserver'=>$request->ipandserver,
                      
            ]);

     


            if ($contactdata) {

                return redirect('/')->with('success', 'contact us success!');}


    }

if ($data['contactdata']) {
              return view('/',$data);

}else{
return redirect('/')->with('error', 'Failed to insert this contactUs! Try again.');

}

}

public function editcontactsdata($id,Request $request ):mixed{

    $data['contactdata'] = ContactUsModel::findOrFail($id);

    if ($request->has('_token') && $data['contactdata']) {

              $validator = Validator::make($request->all(), [
            'readornot' => 'required',
        ]);

               if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

     $data['contactdata']->name =  $request->name;
     $data['contactdata']->subject =  $request->subject;
     $data['contactdata']->phone =  $request->phone;
     $data['contactdata']->email =  $request->email;
     $data['contactdata']->message =  $request->message;
     $data['contactdata']->ipandserver =  $request->ipandserver;

     $data['contactdata']->readornot = ($request->readornot == 'on') ? 1 : 0 ;



if($data['contactdata']->update()){
                return redirect('admin/contactus')->with('success', 'contacts Edited success!');}


    }

if ($data['contactdata']) {
              return view('admin.page.contactus.editcontactus',$data);

}else{
return redirect('admin/contactus')->with('error', 'Failed to Edit this contacts! Try again.');

}

}


public function removecontacts(Request $request): mixed
{
    $skksk =false;
        $contactdata = ContactUsModel::findOrFail($request->id);
        if ($contactdata) {
        $skksk = $contactdata->delete();
        }


                return Response::json($skksk);

}



}
