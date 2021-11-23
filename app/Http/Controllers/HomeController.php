<?php

namespace App\Http\Controllers;

use App\Model\Admin\Hotel;
use App\Model\Admin\Museum;
use App\Model\Admin\Antique;
use Illuminate\Http\Request;
use App\Model\Admin\Governorate;
use App\Model\Admin\Civilization;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $museums_count = Museum::all();
        $museums = Museum::limit(8)->get();
        $civilizations = Civilization::all();
        $antiques = Antique::count();
        $hotels = Hotel::count();
        return view('frontend.index', compact('museums','civilizations','antiques','hotels','museums_count'));
    }

    public function all_museums() {
        $museums = Museum::all();
        return view('frontend.all_museums', compact('museums'));
    }


    public function museum_details($id) {

        $museum = Museum::find($id);
        return view('frontend.museum_details', compact('museum'));

    }


    public function antique_details($id) {

        $antique = Antique::find($id);
        return view('frontend.antique_details', compact('antique'));

    }






    public function all_civilizations() {

        $civilizations = Civilization::all();

        return view('frontend.all_civilizations', compact('civilizations'));


    }


    public function all_gove() {

        $goves = Governorate::OrderBy('id','asc')->get();
        return view('frontend.all_gove', compact('goves'));

    }

    public function gove_museums($id) {

        $governorat = Governorate::find($id);

        return view('frontend.gove_details', compact('governorat'));

    }




}
