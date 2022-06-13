<?php

namespace App\Models;

use App\Models\Fraude;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable =
    [
        "apogee", "cin",
        "cne", "filliere",
        "section", "nom", "prenom"
    ];
    public function fraude(){
        
       return $this->hasOne(Fraude::class);
    }

}
