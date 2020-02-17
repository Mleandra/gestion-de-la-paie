<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('cni')->unique();
            $table->text('nom');
            $table->text('prenom');
            $table->date('date de naissance');
            $table->date('date d embauche');
            $table->text('lieu_naissance');
            $table->text('ville');
            $table->text('adresse ');
            $table->integer('telephone');
            $table->integer('id_poste')->unsigned();
            $table->integer('id_poste')->references('id')->on('postes')->onDelete('cascade');;
            $table->text('email')->unique();
            $table->text('Types de contract');
            $table->date('fin de contract');
            $table->timestamp('created_at')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
