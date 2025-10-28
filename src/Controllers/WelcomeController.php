<?php

namespace Mamun2074\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    /**
     * Display the installer welcome page.
     *
     * @return \Illuminate\View\View
     */

    public function welcome()
    {
        return view('vendor.installer.welcome');
    }

}
