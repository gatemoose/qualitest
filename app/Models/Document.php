<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';
    
    protected $fillable = [
        'title',
        'url',
        'expiration_date',
        'client_id',
    ];

    // protected $casts = [
    //     'expiration_date' => 'date',
    // ];

    public function clients(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
