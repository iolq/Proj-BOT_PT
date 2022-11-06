<?php
// !! Decommissioning.
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // use HasFactory;
    protected $fillable = [
        'customerNumber',
        'custoConfirm',
        'saleConfirm',
        'salerepNumber'
    ];

    public $timestamps = false;
}
