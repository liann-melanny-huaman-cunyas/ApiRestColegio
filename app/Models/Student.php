<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Student extends Model
{
    use HasFactory;

    //data
    protected $fillable = [
        'id',
        'name',
        'surname',
        'identification',
        'cellphone',
        'email',
        'gender',
    ];


    //one a many classrooms
    public function classrooms():HasMany
    {
        return $this->hasMany(Classroom::class);
    }

    //factories
    const femenino = 'femenino';
    const masculino = 'masculino';
}
