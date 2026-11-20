<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $filable =['nombres', 'apellidos', 'fecha_nacimiento', 'expediente', 'urlfoto', 'delegate_id'];

    public function moduls(){
        return $this->belongsToMany(Modul::class, 'modul_students');
    }

    //delegado de este alumno

    public function delegate(){
        return $this->belongsTo(Student::class, 'delegate_id');
    }

    //alumnos que este alumno representa

    public function delegateStudents(){
        return $this->hasMany(Student::class, 'delegate_id');
    }
}
