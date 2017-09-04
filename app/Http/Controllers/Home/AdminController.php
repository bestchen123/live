<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/31
 * Time: 10:49
 */

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;


class AdminController extends CommonController
{
    public function index(){
        return view('admin/index');
    }
}

?>