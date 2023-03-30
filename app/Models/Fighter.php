<?php

namespace App\Models;

use App\Models\Training;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Fighter;

class Fighter extends Model
{
    use HasFactory;

    // Relations

    public function trainings() {
        return $this->belongsToMany(Training::class);
    }


    public static function getFighters() {
        return Fighter::get();
    }

    public static function getAllFighterIds() {
        return Fighter::where('id','>', 0)->pluck('id');
    }
}
