<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\DashboardViewRequest;
use Illuminate\Http\Request;
use App\Models\Settings\Setting;
use Storage;

/**
 * Class DashboardController.
 */
class ParaviewglanceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
      $settingData = Setting::first();
      $logo = $settingData->logo;
      $SettingData['glance_card_title'] = $settingData->glance_card_title;
      $SettingData['glance_card_disc'] = $settingData->glance_card_disc;
      $SettingData['glance_open_file_text'] = $settingData->glance_open_file_text;
      $SettingData['glance_open_file_disc'] = $settingData->glance_open_file_disc;
      $SettingData['glance_save_state_text'] = $settingData->glance_save_state_text;
      $SettingData['glance_screenshot_text'] = $settingData->glance_screenshot_text;
      $SettingData['glance_sidebar_position'] = $settingData->glance_sidebar_position;
      return view('frontend.user.paraview_glance', ['records' => $SettingData]);
    }

    public function s3_bucket(Request $request){
        $filePath = $request->file('file');
        $filename = $request->filename;
        $result   = Storage::disk('s3')->put($filename, file_get_contents($filePath),'public');
    }

    public function getGlanceImages(){
        $result = Storage::disk('s3')->allFiles();
        dd( $result);
    }

    public function fetchLogo(Request $request){

        $settingData = Setting::first();

        $logo = $settingData->logo;
       
        echo  '/paraview_glance/storage/app/public/img/logo/'.$logo;

        die;
    }
}
