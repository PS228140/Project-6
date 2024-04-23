<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Http;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "api_id",
        "categorie_id",
        "name",
        "description",
        "price",
        "img_src",
        "color",
        "height_cm",
        "width_cm",
        "depth_cm",
        "weight_gr",
    ];

    /**
     * Defines the relation between products and categories
     */
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    /**
     * Get a specific product from the Kuin API
     * 
     * @param int $id id of the product to fetch
     * @return $response array of product specs
     */
    public static function getProduct($id)
    {
        $response = Http::withToken("50|Oy8mM3g2A8jSTpiHoxrRXXdspGlvQHbbQ45qM272")->get("https://kuin.summaict.nl/api/product/" . $id);

        return $response;
    }
}
