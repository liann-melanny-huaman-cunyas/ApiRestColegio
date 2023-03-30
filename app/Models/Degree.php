<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Degree extends Model
{
    use HasFactory;

    //data
    protected $fillable=[
        'academic_id',
        'academic_degree'
    ];

    //one a many
    public function classrooms():HasMany
    {
        return $this->hasMany(Classroom::class);
    }
}
