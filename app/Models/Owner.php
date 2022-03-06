<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animals;
use App\Models\Images;

class Owner extends Model

{
    use HasFactory;

    public $timestamps = false;

    public function animals(){

        return $this->hasMany(Animal::class);
    }


}
