<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = array('name', 'surname', 'birthday', 'email');
     protected $table = 'personnes';
}
