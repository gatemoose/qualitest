<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomePage extends Model
{
    use HasFactory;
    
    protected $table = 'home_page';
    
    protected $fillable = [
        'initial_description',
        'why_qualitest',
        'our_values',
    ];
}
