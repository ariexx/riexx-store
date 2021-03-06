<?php

namespace Database\Factories;

use App\Models\transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id' => '1',
            'payment_method_id' => '1',
            'user_detail_id' => '1',
            'uuid' => '123456789',
            'platform' => 'epic',
            'status' => '0',
            'additional' => '08515859213',
            'total' => '1500000',
            'is_paid' => '0',
        ];
    }
}
