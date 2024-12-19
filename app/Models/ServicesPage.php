<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ServicesPage extends Model
{
    use HasFactory;
    
    protected $table = 'services_page';
    protected $fillable = [
        'blue_phrase',
        'text1',
        'text2',
        'text3',
    ];
}
