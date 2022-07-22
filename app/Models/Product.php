<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'catalog_id',
        'code',
        'measures',
        'manufacturer',
        'country_import',
        'country_origin',
        'warranty',
        'barcode',
        'image',
        'properties',
        'prices',
        'quantity',
        'status'
    ];


}
