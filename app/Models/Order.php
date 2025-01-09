<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';
    protected $fillable = ['order_date', 'amount', 'salesman_id', 'customer_id'];

    protected $casts = [
        'order_date' => 'datetime',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
    
    public function salesman()
    {
        return $this->belongsTo(Salesman::class, 'salesman_id', 'salesman_id');
    }
    
    public function customerName()
    {
        return $this->customer ? $this->customer->name : 'N/A';
    }

    public function salesmanName()
    {
        return $this->salesman ? $this->salesman->name : 'N/A';
    }
}
