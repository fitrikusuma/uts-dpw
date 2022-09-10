<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komen;

class HomeController extends Controller
{
  
  function showBeranda()
    {
        return view('beranda');
    }

  function showHome()
  {
    $data['list_artikel'] = Artikel::all();
    return view('welcome', $data);
  }


  function showArtikel(Artikel $artikel)
  {
    $data['artikel'] = $artikel;
    $data2['list_komen'] = Komen::all();
    return view('detailArtikel', $data, $data2);
  }
}
