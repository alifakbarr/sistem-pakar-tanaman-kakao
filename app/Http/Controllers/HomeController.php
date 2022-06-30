<?php

namespace App\Http\Controllers;

use App\Models\Ciri;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        $ciris = Ciri::get();
        $penyakits = Penyakit::get();
        return view('home/index', compact('ciris','penyakits'));
    }

    public function diagnosa(Request $request){
        if ($request->ciri1 == 'c1' && $request->ciri2 == 'c2' && $request->ciri3 == 'c3' && $request->ciri4 == 'c4') {
            $diagnosa = 'PPBK = Penyakit Penggerek buah kakao';
            return redirect()->route('home.index2')->with(['diagnosa'=>$diagnosa]);
        }else if($request->ciri1 == 'c5' && $request->ciri2 == 'c6' && $request->ciri3 == 'c7' && $request->ciri4 == 'c8'){
            $diagnosa = 'PHPP = Penyakit Helopeltis spp';
            return redirect()->route('home.index2')->with(['diagnosa'=>$diagnosa]);
        }
        else if($request->ciri1 == 'c9'){
            $diagnosa = 'PJA = Penyakit jamur air';
            return redirect()->route('home.index2')->with(['diagnosa'=>$diagnosa]);
        }
        else if($request->ciri1 == 'c10' && $request->ciri2 == 'c11' && $request->ciri3 == 'c12' && $request->ciri4 == 'c13'){
            $diagnosa = 'PCSSV = Coco swollen shoot virus';
            return redirect()->route('home.index2')->with(['diagnosa'=>$diagnosa]);
        }
        else if($request->ciri1 == 'c14' && $request->ciri2 == 'c15' && $request->ciri3 == 'c16' && $request->ciri4 == 'c17' && $request->ciri5 == 'c18'){
            $diagnosa = 'PWBD = Witches Broom Diseases';
            return redirect()->route('home.index2')->with(['diagnosa'=>$diagnosa]);
        }
        else if($request->ciri1 == 'c19' && $request->ciri2 == 'c20' && $request->ciri3 == 'c21'){
            $diagnosa = 'PMPR = Monilia Pod Rod';
            return redirect()->route('home.index2')->with(['diagnosa'=>$diagnosa]);
        }
        else if($request->ciri1 == 'c22' && $request->ciri2 == 'c23'){
            $diagnosa = 'PC = Colletotrichum';
            return redirect()->route('home.index2')->with(['diagnosa'=>$diagnosa]);
        }
        else{
            // dd($request->ciri1,$request->ciri2,$request->ciri3,$request->ciri4,$request->ciri5);
            $diagnosa = 'Hasil tidak ditemukan';
            return redirect()->route('home.index2')->with(['diagnosa'=>$diagnosa]);
        }

    }

    public function index2(){
        $ciris = Ciri::get();
        $penyakits = Penyakit::get();
        return view('home/index2', compact('ciris','penyakits'));
    }

}
