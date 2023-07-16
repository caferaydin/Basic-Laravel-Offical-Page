<?php

namespace Modules\WebSetting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\WebSetting\Entities\HomeSetting;
use Modules\WebSetting\Entities\Setting;

class HomeSettingController extends Controller
{
    public function homeEdit(Request $request){
        $home = HomeSetting::find(1)->first();

        if(!$home) {
            $home->name = $request->name;
            $home->title = $request->title;
            $home->information = $request->information;
            $home->save();
            return view('homeEdit');
        }
        else {
            return 'hata mesajı';
        }
    }
}
