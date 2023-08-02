<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coustomers extends Model
{
    use HasFactory;
    protected $fillable=[   'name', 'email', 'phone', 'address', 'city',  'country',
];

public function contacts()
{
    return ($this->hasMany(contacts::class));
}
public function tasks()
{
    return ($this->hasMany(tasks::class));
}
}
