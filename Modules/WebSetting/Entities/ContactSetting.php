<?php

namespace Modules\WebSetting\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone',
        'email'
    ];


}
