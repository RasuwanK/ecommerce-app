<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'code',
        'discount_percent',
        'expiration_date',
    ];

    protected $primaryKey = 'id';

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
