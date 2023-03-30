<?php

namespace App\Models;

use App\Models\Fighter;
use App\Models\FighterTraining;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Training extends Model
{
    use HasFactory;

    //Relations

    public function trainingType() {
        return $this->belongsTo(TrainingType::class)->using(FighterTraining::class);
    }

    public function fighters() {
        return $this->belongsToMany(Fighter::class);
    }

    //Queries

    public static function getTrainingById(int $id) {
        return Training::where('id', $id)->with('trainingType')->first();
    }

}
