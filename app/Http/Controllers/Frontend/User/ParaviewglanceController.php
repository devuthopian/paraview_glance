<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\DashboardViewRequest;
use Illuminate\Http\Request;
use Storage;

/**
 * Class DashboardController.
 */
class ParaviewglanceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('frontend.user.paraview_glance');
    }

    public function s3_bucket(Request $request){
        $filePath = $request->file('file');
        $filename = $request->filename;
        $result = Storage::disk('s3')->put($filename, file_get_contents($filePath),'public');
    }

    public function getGlanceImages(){
        //$result = Storage::disk('s3')->allFiles();
        //dd($result);
        $file = Storage::disk('s3')->get('uploads/csv/' .  $import->filename );
        Auth::id();

    }
}
