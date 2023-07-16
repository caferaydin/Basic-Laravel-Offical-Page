<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\WebSetting\Entities\AboutSetting;
use Modules\WebSetting\Entities\ContactSetting;
use Modules\WebSetting\Entities\HomeSetting;
use Modules\WebSetting\Entities\Setting;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        if ($user->isAuthority == 0) {
            return view('admin::adminHome');
        } else {
            return view('home');
        }
    }

    public function home()
    {
        $user = auth()->user();
        $home = HomeSetting::find(1)->first();

        if ($user->isAuthority == 0) {
            return view('admin::pages.home', compact('home'));
        } else {
            return view('home');
        }

    }

    public function blog()
    {
        $user = auth()->user();
        if ($user->isAuthority == 0) {
            return view('admin::pages.blog');
        } else {
            return view('home');
        }
    }

    public function about()
    {
        $user = auth()->user();
        $about = AboutSetting::find(1)->first();
        if ($user->isAuthority == 0) {
            return view('admin::pages.about', compact('about'));
        } else {
            return view('home');
        }
    }

    public function contact()
    {
        $user = auth()->user();
        $contact = ContactSetting::find(1)->first();

        if ($user->isAuthority == 0) {
            return view('admin::pages.contact', compact('contact'));
        } else {
            return view('home');
        }
    }

    public function webSetting()
    {
        $user = auth()->user();
        $web = Setting::find(1)->first();

        if ($user->isAuthority == 0) {
            return view('admin::pages.web', compact('web'));
        } else {
            return view('home');
        }
    }
}
