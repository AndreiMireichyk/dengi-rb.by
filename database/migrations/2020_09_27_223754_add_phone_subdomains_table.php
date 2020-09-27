<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Subdomain;

class AddPhoneSubdomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subdomains', function (Blueprint $table) {
            $table->text('phone')->after('subtitle');
        });

        Subdomain::all()->each(function ($subdomain){
            $subdomain->setAttribute('phone', [
                'code'=> '+375 29',
                'number'=> "229-85-85",
                'full'=> "+375292298585",
            ])->save();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subdomains', function (Blueprint $table) {
            $table->dropColumn('phone');
        });
    }
}
