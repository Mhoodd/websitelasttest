<?php

namespace App\Http\Controllers;
use Session;


use Illuminate\Support\Facades\Artisan;
use Illuminate\View\View;
use App\Models\Slider;
use App\Models\AboutusModel;
use App\Models\GeneralinfoModel;
use App\Models\services;
use App\Models\NewsModel;
use App\Models\ContactUsModel;


class HomeController extends Controller
{
    public function index(): View
    {
     if (\Session::get('lang') == null) {
          Session::put('lang', '1');
          $lang = 1;
        }else{
$lang =  Session::get('lang');
        }
       $objs =GeneralinfoModel::where('typeofdata','!=','file')->where('lang',$lang)->get();
       $data['homedata'] = $skd =json_decode(json_encode($objs));
       $data['general'] = array_column($skd, 'name');

        $data['Logo_footer'] = GeneralinfoModel::where('name','=','Logo_footer')->where('lang',$lang)->first();
        $data['Logo'] = GeneralinfoModel::where('name','=','Logo')->where('lang',$lang)->first();

        $data['slider'] = Slider::where('isavisable',1)->where('lang',$lang)->orderBy('id', 'DESC')->first();

$data['aboutus']= AboutusModel::where('lang',$lang)->orderBy('id', 'DESC')->get()->first();
$data['services']= services::where('isavisable',1)->orderBy('id', 'DESC')->where('lang',$lang)->get();
$data['newsblog']= NewsModel::where('active',1)->orderBy('id', 'DESC')->where('lang',$lang)->limit(3)->get();

        return view('home',$data);
    }

    public function clearCache(): View
    {
        Artisan::call('cache:clear');

        return view('clear-cache');
    }


    
}
