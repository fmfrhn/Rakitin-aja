<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'tipe_spesifikasi',
        'spesifikasi',
        'link',
        'image',
        'price'
    ];

    public function questionCategory()
    {
        return $this->belongsTo(QuestionCategory::class);


    }

}
