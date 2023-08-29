<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['subcategory_id' ,'question_text', 'difficulty', 'answer_text_a', 'answer_text_b', 'answer_text_c', 'answer_text_d', 'correct_answer'];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

}
