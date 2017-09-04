<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/31
 * Time: 10:49
 */

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;


class CommonController extends Controller
{
    public function __construct(){
        $session = new session();
    	$user_id = $session->get('user_id');
    	if (empty($user_id)) {	
    		exit(view('log/index'));
    	}

    }
    
       
   
}

?>