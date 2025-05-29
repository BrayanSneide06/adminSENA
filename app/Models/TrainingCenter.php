<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['name'];

=======
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
      public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}




