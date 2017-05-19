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

	public function add_people(Request $request){
		
		$personnes= new Personne;
		$personnes->name = $request->name;
		$personnes->surname = $request->surname;
		$personnes->email = $request->email;
          
		$personnes->save();
		return back();
		
	}
}
