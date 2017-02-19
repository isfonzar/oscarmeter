<?php

    namespace App\Http\Controllers;

    use App\Libraries\OscarLibrary;

    class HomeController extends Controller
    {
        public function index()
        {
            $oscarLibrary = new OscarLibrary();

            $data['nominations'] = $oscarLibrary->get();

            return view('home', $data);
        }
    }