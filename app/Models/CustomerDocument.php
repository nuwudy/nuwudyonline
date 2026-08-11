<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerDocument extends Model
{
    protected $fillable = [
        'customer_id',
        'name',
        'file_path',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
