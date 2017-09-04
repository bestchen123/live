<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/31
 * Time: 20:27
 */
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class LogController extends Controller
{
    public function index(){

        return view('log/index');
    }

    public function check(){
        $username = isset($_POST['username'])?$_POST['username']:'';
        $pwd = isset($_POST['pwd'])?$_POST['pwd']:'';
        //验证用户的合法性
        $pwd = md5($pwd);
        $info = DB::select("select * from user where username = '$username' and pwd = '$pwd'");
        $info = $this->object2array($info);
        if ($info){
            $session = new session();
            $user_id = $info[0]['id'];
            $session->set('user_id',$user_id);

            return view('admin/index');
        }

    }
}

?>