<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerService extends Model
{
    protected $fillable = ['customer_id', 'service_type', 'expiry_date', 'status', 'notes'];

    protected function casts(): array
    {
        return [
            'expiry_date' => 'date',
        ];
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
