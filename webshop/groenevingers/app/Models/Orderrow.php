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
        "product_id",
        "quantity",
        "price"
    ];

    /**
     * Get Order coresponding with the Orderrow.
     */
    public function Order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
