<?php

namespace App\Http\Controllers;

use App\Models\Fighter;
use Illuminate\Http\Request;

class FighterController extends Controller
{
    //


    public function viewAllFighters() {

        $fighters = Fighter::getFighters();

        return view('homepage', ['fighters' => $fighters]);
    }
}
