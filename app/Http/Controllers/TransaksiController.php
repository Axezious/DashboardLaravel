<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
	public function index()
    {
		return view('transaksi.index');
    }
	
   
}
