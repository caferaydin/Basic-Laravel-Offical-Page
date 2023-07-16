<?php

namespace Modules\WebSetting\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
    ];


}
