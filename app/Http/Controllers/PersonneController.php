<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
	public function get_table (){

		$personnes = Personne::All();
		return view('list',compact('personnes'));
	}
}
