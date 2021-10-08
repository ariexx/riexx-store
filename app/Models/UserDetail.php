<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'email',
        'password'
    ];

    // protected $hidden = [
    //     'email',
    //     'password'
    // ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'user_detail_id');
    }
}
