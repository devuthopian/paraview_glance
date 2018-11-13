<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\DashboardViewRequest;
use Storage;

/**
 * Class DashboardController.
 */
class ParaviewglanceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.paraview_glance');
    }
      public function s3_bucket()
    {
      $key = $_GET['url'];
     //echo $key;



$filePath = "https://webdev.misbits.co/web/images/misbits-logo.png";


Storage::disk('s3')->put('misbits-logo.png', file_get_contents($filePath),'public');

//Storage::disk('s3')->put('file.txt', 'This is a test'); 





}

    
    



}
