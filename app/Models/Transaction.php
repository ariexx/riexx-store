<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'service_id',
        'payment_method_id',
        'user_detail_id',
        'uuid',
        'platform',
        'email',
        'password',
        'status',
        'additional',
        'total',
        'is_paid',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id', 'id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id', 'id');
    }

    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class, 'user_detail_id', 'id');
    }
}
