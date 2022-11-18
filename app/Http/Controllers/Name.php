<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


 class Name extends Controller 
{ 
public function show() 
   {

    
 return view('Name.ban', ['var4' => 'Пресняков', 'var3' =>'Максим','age'=>18,'date'=>7,'month'=>13,'pages'=>[ 1,3,4,5,6] ]); 

    }	 



        
}

?>

