<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cource extends Model
{
    protected $guarded = ['id'];

    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function lastUpdatedBy()
    {
        return $this->belongsTo(User::class, 'last_updated_by');
    }

    public function addedBy()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
    use HasFactory;
}
