<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'suppliers';

    // Define the fillable columns to protect against mass-assignment vulnerabilities
    protected $fillable = [
        'name',
        'contact_name',
        'phone',
        'email',
        'address',
        'website',
    ];

    // Define a relationship to the Product model
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
