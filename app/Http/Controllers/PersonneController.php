<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personne;


class PersonneController extends Controller
{

	public function return_detail(){
		$personnes = Personne::All();
		return view('detail',compact('personnes'));

	}
		

	public function get_table (){

		$personnes = Personne::All();
		return view('list',compact('personnes'));
	}

	public function add_people(Request $request){
		
		$personnes= new Personne;
		$personnes->name = $request->name;
		$personnes->surname = $request->surname;
		$personnes->email = $request->email;
        $personnes->birthday = $request->birthday;
		$personnes->save();
		return back();

	}

		public function edit_form($id){

		$personnes=Personne::find($id);
	
		return view('edit',compact('personnes'));

		}

		public function check_edit($id,Request $request){
		
		$personnes= Personne::find($id);
		
		$personnes->name = $request->name;
		$personnes->surname = $request->surname;
		$personnes->email = $request->email;
		$personnes->birthday = $request->birthday;
		$personnes->save();
		return redirect('/');

	}

	public function delete($id){
		$personnes = Personne::find($id);
		$personnes->delete();
		return back();
	}



}
