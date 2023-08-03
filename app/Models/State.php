<?php

namespace App\Models;

use App\Models\Country;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;
    public function country():belongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
