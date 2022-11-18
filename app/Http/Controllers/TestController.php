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
  $add=[
  		'да',
  		'угу',
  		'нет'
  		];

$emp = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
	];


 return view('Test.test', ['var1' => '1', 'var2' => '2','arr'=>$this->arr1,'add'=>$add,'arr1'=>[1,2,3,4,5],'data'=>[1,2,3,4,5,6,7,8,9,10,11,12],'fsd'=>[[1,2,3,4,5],[54,34,56,78,90],[23,33,44,55,66],[22,453,333,444,555],[33,2,44,55,1]],'emp'=>$emp ]); 

    }	 



        
}

?>


