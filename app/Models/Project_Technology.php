<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project_Technology extends Model
{
    // specifico il nome della tabella perché il nome del model contiene un underscore
    protected $table = 'project_technology';

    // colonne assegnabili
    protected $fillable = ['project_id', 'technology_id'];

    // timestamps abilitati (default true) ma lasciato esplicito
    public $timestamps = true;
}
