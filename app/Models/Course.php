<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


<<<<<<< HEAD
    protected $fillable = [
        'id',
        'course_number',
        'day',
        'area_id',
        'training_center_id',
    ];
=======
    protected $fillable = ['course_number', 'day', 'area_id', 'training_center_id'];
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e


    public function area()
    {
        return $this->belongsTo(Area::class);
    }

<<<<<<< HEAD
    public function trainingCenter()
=======
    public function training_center()
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
    {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function apprentices()
    {
        return $this->hasMany(Apprentice::class);
    }
}
