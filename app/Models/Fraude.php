<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fraude extends Model
{
    use HasFactory;
    protected $fillable =
    [
        "reference", "type",
        "matiere", "date",
        "lieu", "heure", "surveillant","note","image","student_id"
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
       public static function makeDirectory()
       {
           
           $subFolder='images' ;
           Storage::makeDirectory($subFolder);
           return $subFolder;
       }
}
