<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $table = 'clients';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'cnpj',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    protected static function booted()
    {
        static::creating(fn (Client $cliente) => $cliente->password = (string) Str::password(8));
    }
}
