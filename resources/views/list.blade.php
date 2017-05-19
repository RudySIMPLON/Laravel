@extends('base')

@section('content')
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();

    });
</script>

<table id="myTable" class="table-stripped table table-bordered">

    <thead>

        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de Naissance</th>
            <th>Email</th>

        </tr>

    </thead>
    <tbody>
        @foreach ( $personnes as $personne) 
        <tr>
            <th>{{$personne->name}}</th>
            <th>{{$personne->surname}}</th>
            <th>{{$personne->birthday}}</th>
            <th>{{$personne->email}}</th>
            <th><form action="">
                <button class="btn btn-primary">modifier</button>
            </form>
            </th>
            <th><form action="">
            <button class="btn btn-primary">Supprimer</button>
            </form>
            </th>

        </tr>


        @endforeach
    </tbody>
</table>

<div id="example">


</div>

@stop