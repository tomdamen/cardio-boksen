<?php

namespace App\Models;

use App\Models\Training;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class trainingType extends Model
{
    use HasFactory;

    public function trainings() {
        return $this->hasMany(Training::class);
    }
}
