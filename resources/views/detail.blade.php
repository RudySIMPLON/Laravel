@extends('base')

@section('content')
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();

    });
</script>

  

<div class="text-center">
    <h1>Liste Utilisateur</h1><br>

        <form action="/add" method="post">
            {{csrf_field()}}
    
            <label for="surname" >Nom: 
              <input type="text" name="surname" id="title" required="required">
            </label>

            <label for="surname" >Prenom: 
              <input type="text" name="name" id="text" required="required">
            </label>

            <label for="email" >email: 
              <input type="email" name="email" id="email" required="required">
            </label>

            <label for="birthday" >date de naissance: 
            <input type="text" name="birthday" id="birthday" required="required" >
            </label>
            <input type="submit" class="btn btn-success"> 

     </form>    
    

</div><br><br>

    
  <!--   <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">Contenu</div>
            <form action="/add" method="post">
       {{csrf_field()}}
    
        <label for="surname" >Nom: 
          <input type="text" name="surname" id="title">
        </label>
        <label for="surname" >Prenom: 
          <input type="text" name="name" id="text">
        </label>

        <label for="email" >email: 
          <input type="email" name="email" id="email">
        </label>

        <label for="birthday" >date de naissance: 
        <input type="text" name="birthday" id="birthday">
        </label>
        <input type="submit" class="btn btn-success"> 

     </form>    
</div>
</div>
 -->

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
            <th>
            <form action="/edit/{{$personne->id}}" method="get">
                <button class="btn btn-primary">modifier</button>
            </form>
            </th>
            <th><form action="/delete/{{$personne->id}}">
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