<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

<<<<<<< HEAD
       protected $fillable = [
        'name',
        'email',
         'cell_number',
        'course_id',
        'computer_id'
    ];

    public function computer(){
        return $this->belongsTo(Computer::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
=======
    public function computer(){
        return $this->belongsTo(Computer::class);
    }
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
}
