<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
$age=18;

 class TestController extends Controller 
{ 
	protected $arr1;
	public function __construct(){
		$this->arr1=[1,2,3,4,5];
	}
public function show() 
   {
  

 return view('about'); 

    }	 



        
}

?>


