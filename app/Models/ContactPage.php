<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactPage extends Model
{
    use HasFactory;
    
    protected $table = 'contact_page';
    
    protected $fillable = [
        'address',
        'phone',
        'email',
        'google_maps_embedding',
        'social_media',
    ];
}
