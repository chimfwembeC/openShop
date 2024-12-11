<?php

namespace App\Models;

use App\Models\ProductImage;
use App\Models\Shop;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'details',
        'slug',
        'description',
        'price',
        'sku',
        'stock_quantity',
        'discount_price',
        'is_active',
        'supplier_id',
        'shop_id'
    ];

    public function shop()
    {
        return $this->BelongsTo(Shop::class);
    }

    public function images()
{
    return $this->hasMany(ProductImage::class);
}

  // Define the relationship to the Supplier model
  public function supplier()
  {
      return $this->belongsTo(Supplier::class);
  }

}
