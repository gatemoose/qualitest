<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ServicesList extends Model
{
    use HasFactory;
    
    protected $table = 'services_list';
    protected $fillable = [
        'title',
        'description',
    ];
}
