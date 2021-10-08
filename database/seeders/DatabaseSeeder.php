<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Service::factory(1)->create();
        UserDetail::factory(1)->create();
        PaymentMethod::factory(1)->create();
        Transaction::factory(1)->create();
        // Payment::factory(20)->create();
    }
}
