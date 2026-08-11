<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'whatsapp', 'phone', 'address'];

    public function services()
    {
        return $this->hasMany(CustomerService::class);
    }

    public function documents()
    {
        return $this->hasMany(CustomerDocument::class);
    }
}
