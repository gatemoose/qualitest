<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}
