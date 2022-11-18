<?php 
namespace App\Http\Controllers;



 use App\Http\Controllers\Controller;

 class Page extends Controller 
{
   
    public $pages = [ 1 => 'страница 1', 3=>'страница 2',  'страница 4', 'страница 5' ];

public function pagess($id) { 
    if (isset($this->pages[$id])) 
        return $this->pages[$id];

    return 'error';


    } 
    


    public function showOne($id) { 
        return $id*$id; 
        } 
            
    public function showAll($id) { 
        return $id; 
            } 

}


?>