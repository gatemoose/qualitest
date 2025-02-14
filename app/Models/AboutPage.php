<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutPage extends Model
{
    use HasFactory;
    
    protected $table = 'about_page';
    
    protected $fillable = [
        'mission',
        'values',
        'vision',
        'patricia',
        'additional_qualifications',
        'professional_experience',
        'history',
    ];
}
