<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Hotel;
use App\Model\Admin\Museum;
use App\Model\Admin\Antique;
use Illuminate\Http\Request;
use App\Model\Admin\Civilization;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function  index() {

        $museums = Museum::count();
        $civilizations = Civilization::count();
        $antiques = Antique::count();
        $hotels = Hotel::count();

        return view('admin.index', compact('museums','civilizations','antiques','hotels'));

    }

}
