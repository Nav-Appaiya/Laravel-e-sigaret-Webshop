<?php
/**
 * Created by PhpStorm.
 * User: Nav
 * Date: 05-06-16
 * Time: 08:53
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categoryID');
            $table->string('title');
            $table->string('description');
            $table->string('status');
            $table->string('price'); // TODO: Stond niet in ERD, neem aan dat die wel erbij moet?
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('products');
    }
}
