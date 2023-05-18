<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{

    /**
     * Show about page
     *
     * @return Void
     */
    public function aboutPage()
    {
        return view('frontend.static.about');
    }


    /**
     * Show policy page
     *
     * @return Void
     */
    public function policyPage()
    {
        return view('frontend.static.policy');
    }


    /**
     * Show privacy page
     *
     * @return Void
     */
    public function privacyPage()
    {
        return view('frontend.static.privacy');
    }


    /**
     * Show contact page
     *
     * @return Void
     */
    public function contactPage()
    {
        return view('frontend.static.contact');
    }
}
