<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    public function percobaan()
    {
    	$a=2;
    	$b=2;
    	return view('index', compact('a', 'b'));
    }

    //
    public function percobaan2()
    {
    	$a="aaa";
    	$b="bbb";
    	$c="ccc";
    	$d="ddd";
    	$e="eee";
    	return view('index2', compact('a', 'b', 'c', 'd', 'e'));
    }

    //
    public function percobaan3()
    {
    	$a="nola";
    	$b="rian";
    	$c="rajendra";
    	$d="septa";
    	$e="widan";
    	return view('index3', compact('a', 'b', 'c', 'd', 'e'));
    }

    //
    public function percobaan4()
    {
    	$a="mmm";
    	$b="nnn";
    	$c="ooo";
    	$d="ppp";
    	$e="qqq";
    	return view('index4', compact('a', 'b', 'c', 'd', 'e'));
    }

    //
    public function percobaan5()
    {
    	$a="uuu";
    	$b="iii";
    	$c="ppp";
    	$d="ttt";
    	$e="yyy";
    	return view('index5', compact('a', 'b', 'c', 'd', 'e'));
    }

//Parameter
    public function param()
    {
    	return view('welcome');
    }

    public function parameter($a)
    {
    	return view('welcome2', compact('a'));
    }
}

