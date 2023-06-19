<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'Order_Name',
        'Item_id',
        'Quantity',
        'Price',
        'Order_Date',
        'Status',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }

}
