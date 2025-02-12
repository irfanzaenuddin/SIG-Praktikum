<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Provinsi;

class BerandaController extends Controller
{
    public function index()
    {
      $provinces = DB::table('provinsi')->get();
    //   $provinces = Provinsi::all();

        return view('beranda', [
            'provinces' => $provinces
        ]);
    }
}