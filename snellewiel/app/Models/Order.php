<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Http;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'api_id',
        'customer_id',
        "deliver_name",
        "deliver_address",
        "deliver_city",
        "deliver_zipcode"
    ];

    /**
     * define the one-to-many relationship with Customers
     */
    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * define the one-to-many relationship with Orderrows
     */
    public function Orderrow(): HasMany
    {
        return $this->hasMany(Orderrow::class);
    }

    /**
     * fetch all rows from orders table within the Groenevingers api
     */
    public static function apiFetchAll()
    {
        return Http::get('127.0.0.1:8001/api/orders');
    }

    /**
     * fetch a specific row from orders table within the Groenevingers api
     */
    public static function apiFetch($id)
    {
        return Http::get('127.0.0.1:8001/api/orders/' . $id);
    }
}
