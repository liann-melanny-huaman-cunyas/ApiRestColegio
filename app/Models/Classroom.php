<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'classroom_id'
    ];

    public function students():BelongsTo
    {
        return $this->belongsTo(Student::class,'student_id');
    }

    public function degrees():BelongsTo
    {
        return $this->belongsTo(Degree::class,'degree_id');
    }

    public function sections():BelongsTo
    {
        return $this->belongsTo(Section::class,'section_id');
    }

    public function levels():BelongsTo
    {
        return $this->belongsTo(Level::class,'level_id');
    }

    public function turns():BelongsTo
    {
        return $this->belongsTo(Turn::class,'turn_id');
    }

}
