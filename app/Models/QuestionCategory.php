<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    use HasFactory;
    protected $table = 'kuisioner_kategori';

    protected $fillable = ['nama_kategori']; //string

    public function question()
    {
        return $this->hasMany(Question::class, 'kategori_id');
    }

    public function reccomendation()
    {
        return $this->hasMany(Recommendation::class, 'category_id');
    }
}
