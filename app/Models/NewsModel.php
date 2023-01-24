<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    use HasFactory;
        protected $fillable = [
        'lang','title','desc_news','img_news','details_news','byname','active'
    ];
}
