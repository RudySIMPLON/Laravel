@extends('base')

@section('content')


<div class="text-center">
    <h1>Modification de l'utilisateur</h1><br>
<!-- <div class="col-sm-12"> -->
	<form action="/editCheck/{{$personnes->id}}" method="post">
		{{csrf_field()}}
		<label for="surname">Nom
			<input type="text" name="surname" id="surname" value="{{$personnes->surname}}">
		</label>

		<label for="name">Prenom
			<input type="text" name="name" id="name" value="{{$personnes->name}}">
		</label>

		<label for="email">email
			<input type="email" name="email" id="email" value="{{$personnes->email}}">
		</label>

		<label for="birthday">Date de naissance
			<input type="" name="birthday" id="birthday" value="{{$personnes->birthday}}">
		</label>
		<input type="submit">
	</form>
</div> 



@stop