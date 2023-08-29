<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArabaFromRequest;
use App\Models\Arabaİnsert;
use Illuminate\Http\Request;
use App\Models\Order;
class AdminController extends Controller
{

    public function view()
    {
        $arabas = Arabaİnsert::all();
        return view("user.index1", compact("arabas"));
    }

    public function create()
    {
        return view("user.create");
    }

    public function store(ArabaFromRequest $request)
    {
        $araba = new Arabaİnsert();
        $araba->adi = $request->adi;
        $araba->marka = $request->marka;
        $araba->sene = $request->sene;
        $araba->renk = $request->renk;
        $araba->vites = $request->vites;
        $araba->fiyat = $request->fiyat;
        $araba->resim = $request->resim;
        $araba->km = $request->km;

        $araba->save();
        return redirect()->route("araba.liste")->with("message", "Başarılı eklendi");
    }


    public function edit($id)
    {
        $araba = Arabaİnsert::where('id', $id)->first();
        return view("user.edit", ["araba" => $araba]);
    }

    public function update(ArabaFromRequest $request, $id)
    {
        $validatedData = $request->validated();

        $araba = Arabaİnsert::find($id);
        $araba->update([
            "adi" => $validatedData["adi"],
            "marka" => $validatedData["marka"],
            "fiyat" => $validatedData["fiyat"],
            // "sene" => $validatedData["sene"],
            // "renk" => $validatedData["renk"],
            // "vites" => $validatedData["vites"],
            // "km" => $validatedData["km"],
            // "resim" => $validatedData["resim"],

        ]);

        return redirect()->route("araba.liste")->with("message", "Başarılı bir şekilde güncellendi");
    }


    public function delete($id)
    {
        $araba = Arabaİnsert::find($id);

        if ($araba) {
            $araba->delete();
            return redirect()->route('araba.liste')->with("message", "Başarılı bir şekilde silindi");
        } else {
            return redirect()->route('araba.liste')->with("message", "Araba bulunamadı");
        }
    }

    public function showorder()
    {
        $order=order::all();
        return view("admin.showorder",compact("order"));
    }


    public function statusupdate( $id)
    {

        $order=order::find($id);
        $order->status="teslim edildi";
        $order->save();

        return redirect()->back();
    }

}
