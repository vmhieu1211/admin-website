<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSuggest extends Model
{
    use HasFactory;
    protected $filable = [
        'product_name',
        'amount',
        'money',
        'status',
        'purchase_date',
        'delivery_date',
        'person_delivery_id',
        'department'
    ];

    public function personDelivery()
    {
        return $this->belongsTo(User::class, 'person_delivery_id');
    }

    public function suggest()
    {
        return $this->hasMany(Suggest::class, 'product_id');
    }
}
