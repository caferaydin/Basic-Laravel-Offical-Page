<?php

namespace Modules\WebSetting\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'information',
        'image',
    ];

}
