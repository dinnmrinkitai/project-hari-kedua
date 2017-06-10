<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coba;

class CobaController extends Controller
{
    //
    Public Function test()
    {
    	$a = Coba::all();
    	return $a;
    }

    Public Function test2($id)
    {
    	$a = Coba::find($id);
    	return $a;
    }

    Public Function test3($id)
    {
    	$tampilan = Coba::find($id);
        return $tampilan;
    	//return view('index6', compact('tampilan'));
    }

     Public Function percobaan6()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	return view('buah', compact('buah'));
    }

    Public Function ulang()
    {
    	$data = ['Adi','Tatang','Juju','Icih'];
    	return view('index', compact('data'));
    }

    Public Function array($a)
    {
    	$data = ['binatang' => ['Harimau','Gajah','Kucing','Anjing','Beruang'],
    	'kendaraan' => ['Motor','Mobil','Sepeda','Truk','Pesawat'],
    	'laptop' => ['Asus','Acer','HP','Samsung','Aple']];
    	$ahaha = $data[$a];
    	return view('index7', compact('ahaha'));
    }

    Public Function test4($id)
    {
        $tampilan = Coba::where('jurusan','like',$id)-> Orwhere('nama','like',$id)->get();
        return $tampilan;
    }

}
