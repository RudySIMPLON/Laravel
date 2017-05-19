<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personne;

class PersonneController extends Controller
{
	public function get_table (){

		$personnes = Personne::All();
		return view('list',compact('personnes'));
	}
}
