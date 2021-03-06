<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * shows FAQ blade
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showFAQ()
    {
        return view('infos/faq');
    }

    /**
     * shows lendCar blade
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLendCar()
    {
        return view('infos/lendCar');
    }

    /**
     * shows RentCar blade
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRentCar()
    {
        return view('infos/rentCar');
    }

    /**
     * shows about blade
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAbout()
    {
        return view('infos/about');
    }

    /**
     * shows AGB blade
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAGB()
    {
        return view('infos/agb');
    }
}
