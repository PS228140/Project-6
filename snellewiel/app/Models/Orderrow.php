<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orderrow extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "order_id",
        "api_id",
        "product_name",
        "product_height",
        "product_weight",
    ];

    /**
     * define the one-to-many relationship with Orderrows
     */
    public function Order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
