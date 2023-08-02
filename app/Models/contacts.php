<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;
    protected $fillable=[     'customer_id', 'name', 'email', 'phone'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
