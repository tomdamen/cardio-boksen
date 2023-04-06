<?php

namespace App\Http\Controllers;

use App\Models\Fighter;
use App\Models\Training;
use Illuminate\Http\Request;

class FighterController extends Controller
{
    //


    public function viewAllFighters() {

        $fighters = Fighter::getFighters();

        return view('homepage', ['fighters' => $fighters]);
    }

    public function viewWelcome() {

        $fighters = Fighter::getFighters(); 

        return view('welcome', ['fighters' => $fighters]);
    }


    public function testFunction() {
        $training = Training::getTrainingById(1);

        return view('test', ['training' => $training]);
    }
}
