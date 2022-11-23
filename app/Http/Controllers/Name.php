<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


 class Name extends Controller 
{ 
public function up() 
   {

    
      Schema::create('users', function (Blueprint $table) {
         $table->increments('id');
         $table->string('login')->unique();
         $table->string('email')->unique();
         $table->string('password');
         $table->rememberToken();
         $table->timestamps();
     });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
     Schema::drop('users');
 }

?>

