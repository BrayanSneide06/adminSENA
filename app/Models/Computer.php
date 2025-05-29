<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

<<<<<<< HEAD
     protected $fillable = [
        'number',
        'brand',
    ];

=======
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
      public function apprentice(){
        return $this->hasOne(Apprentice::class);
    }
}
