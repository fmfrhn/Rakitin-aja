<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'kuisioner';

    protected $fillable = [
        'kategori_id',
        'pertanyaan',
        'created_at',
        'updated_at'
    ];

    //nanti benerin table kuisioner
    public function answer() {
        return $this->hasMany(Answer::class, 'kuisioner_id','id');
    }

    public function questionCategory() {
        return $this->belongsTo(QuestionCategory::class, 'kategori_id');
    }
}
