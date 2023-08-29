<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LearningSession extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['user_id' ,'start_date', 'end_date' ,'progress_stats'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
