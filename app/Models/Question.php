<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'category_id',
        'pertanyaan',
        'created_at',
        'updated_at'
    ];

    //nanti benerin table kuisioner
    public function answer() {
        return $this->hasMany(Answer::class, 'question_id','id');
    }

    public function questionCategory() {
        return $this->belongsTo(QuestionCategory::class, 'category_id');
    }
}
