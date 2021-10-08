<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // - Paket Promo :
        // 10K Money + 20 Gold : 50.000
        // - Paket Premium :
        // 20K Money + 35 Gold : 99,99K
        // - Paket Premium Plus :
        // 30K Money + 50 Gold : 149,99K
        // - Paket Diamond :
        // 40K Money + 70 Gold : 199,99K
        // - Diamond Plus :
        // 50K Money + 120 Gold : 299,99K
        // - Bonding Horse (MAX)
        // 20K MAX (Level 4)
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nama paket / services
            $table->enum('type', ['package', 'single']); // nama paket / services
            $table->decimal('price', 19, 2);
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
