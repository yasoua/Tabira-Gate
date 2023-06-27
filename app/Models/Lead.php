<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $guarded = ['id'];

    public function cources()
    {
        return $this->belongsTo(Cource::class, 'course_id');
    }
    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
    public function languages()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
    public function LastUpdatedBy()
    {
        return $this->belongsTo(User::class, 'last_updated_by');
    }
    use HasFactory;
}
