<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SegiEmpat;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class SegiEmpatController extends Controller
{
    public function inputSegiEmpat()
    {
        return View::make('segi-empat.inputSegiEmpat');
    }
    public function hasil(Request $request)
    {
        $segiEmpat = new SegiEmpat;
        //aturan validasi
        $rules = [
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric'
        ];
        $validator = Validator::make($request->all(), $rules);
        //cek validasi
        if ($validator->fails()) {
            //jika salah kembalikan ke form untuk diperbaiki
            return View::make(
                'segi-empat.inputSegiEmpat',
                compact('segiEmpat')
            )->withErrors($validator);
        } else {
            //lanjutkan ke menampilkan hasil/
            $segiEmpat->panjang = $request->panjang;
            $segiEmpat->lebar = $request->lebar;
            return View::make('segi-empat.hasil', compact('segiEmpat'));
        }
    }

    //method memanggil form masukkan
    public function inputBalok()
    {
        return View::make('segi-empat.inputBalok');
    }
    //method menghitung hasil
    public function hasilBalok(Request $request)
    {
        $balok = new \App\Models\Balok;
        //aturan validasi
        $rules = [
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
            'tebal' => 'required|numeric'
        ];
        $validator = Validator::make($request->all(), $rules);
        //cek validasi
        if ($validator->fails()) {
            //jika salah kembalikan ke form untuk diperbaiki
            return View::make(
                'segi-empat.inputBalok',
                compact('balok')
            )->withErrors($validator);
        } else {
            //lanjutkan ke menampilkan hasil/
            $balok->panjang = $request->panjang;
            $balok->lebar = $request->lebar;
            $balok->tebal = $request->tebal;
            return View::make('segi-empat.hasilBalok', compact('balok'));
        }
    }

    public function inputLimas()
    {
        return View::make('segi-empat.inputLimas');
    }
    public function hasilLImas(Request $request)
    {
        $limas = new \App\Models\Limas;
        //aturan validasi
        $rules = [
            'luasAlas' => 'required|numeric',
            'luasLimas' => 'required|numeric'
        ];
        $validator = Validator::make($request->all(), $rules);
        //cek validasi
        if ($validator->fails()) {
            //jika salah kembalikan ke form untuk diperbaiki
            return View::make(
                'segi-empat.inputLimas',
                compact('limas')
            )->withErrors($validator);
        } else {
            //lanjutkan ke menampilkan hasil/
            $limas->luasAlas = $request->luasAlas;
            $limas->luasLimas = $request->luasLimas;
            return View::make('segi-empat.hasilLimas', compact('limas'));
        }
    }
}
