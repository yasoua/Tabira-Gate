<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = ['id'];

    public function leads()
    {
        return $this->hasMany(Lead::class, 'lead_id');
    }
    use HasFactory;
}
