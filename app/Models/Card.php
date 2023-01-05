<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'filter_id',
        'html_code',
        'css_code',
        'js_code',
        'credit',
        'status',
    ];
}
