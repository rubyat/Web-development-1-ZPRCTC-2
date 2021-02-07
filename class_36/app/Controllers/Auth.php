<?php

namespace App\Controllers;
use App\Models\LoginM;

class Auth extends BaseController
{
	public function index()
	{

        $error_mgs = '';

        if($_POST){

            $login = new LoginM();
            $user = $login->where('user_name',$_POST['user_name'])->where('password',md5($_POST['password']))->first();



            if(!empty($user)){


                if($user['status']){
                    // $_SESSION['is_login'] = true;
                    // $_SESSION['user_name'] = $user['user_name'];
                    // $_SESSION['user_id'] = $user['user_id'];

                    // header('Location: index.php');

                    $user_log_info = array(
                        'is_login' => true,
                        'user_name' => $user['user_name'],
                        'user_id' => $user['user_id'],
                    );

                    $session = session();
                    $session->set($user_log_info);
                    return redirect()->to(base_url('admin/slider'));

                }else{
                    $error_mgs =  'Inactive. Please contact to Admin';
                }

                

            }else{
                $error_mgs =  'Incorrect login';
            }



        }

        $data = array();

        $data['error_mgs'] = $error_mgs;
		return view('login',$data);
	}
    


}
