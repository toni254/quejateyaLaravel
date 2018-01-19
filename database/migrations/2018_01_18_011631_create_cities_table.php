$table->increments('id');
$table->string('name',30)->nullable();
$table->string('code',30)->nullable();
$table->boolean('published');
$table->interger('user_created')->unsigned();
$table->interger('user_modified')->unsigned();
$table->timestamps();
$table->primary('id');
$table-><?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name',30)->nullable();
          $table->string('code',30)->nullable();
          $table->boolean('published');
          $table->integer('user_created')->unsigned();
          $table->integer('user_modified')->unsigned();
          $table->timestamps();
          $table->integer('country_id')->unsigned();
          $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
