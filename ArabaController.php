<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Arabalar;
use App\Models\Populer_oto;
use App\Models\Logos;
class ArabaController extends Controller
{
    public function show()  {

    $arabalar=Arabalar::all();
    $populers=Populer_oto::all();
    $logolar=Logos::all();

    return view("index",["arabalars"=>$arabalar, "populers"=>$populers, "logolar"=>$logolar]);

    }
}
?>
