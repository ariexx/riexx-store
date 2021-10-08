<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    // public const PENDING = 0;
    // public const PROCESSING = 1;
    // public const COMPLETED = 2;

    protected $fillable = [
        'name',
        'type',
        'price',
        'description',
    ];

    protected $casts = [
        'name' => 'string',
    ];

    public static function getData()
    {
        return self::all();
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'service_id');
    }

    // public function payment()
    // {
    //     return $this->
    // }
}
