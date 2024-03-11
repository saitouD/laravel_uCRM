<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Item;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);//複数の購買履歴は一つの顧客と結びつく
    }

    public function items()
    {
        return $this->belongsToMany(Item::Class)
        ->withPivot('quantity');
    }

}
