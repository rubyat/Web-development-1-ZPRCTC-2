<?php


namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\LoginM;


class Profile extends BaseController
{
	public function index()
	{
        $session = session();
        $login = new LoginM();
        $update_success = '';

        if($_POST){

            $profileData = array(
                'user_name' => $_POST['user_name'],
                'password' => md5($_POST['password']),
            );

            $login->update($session->user_id,$profileData);
            $update_success = "Record updated successfully";

        }


        $data['page'] = 'Profile';
        $data['succes_message'] = $update_success;
        $data['user'] = $login->where('user_id',$session->user_id)->first();

		$data['main_content'] = view('admin/profile',$data);
		return view('admin/layout',$data);
    }

	


    public function logout()
	{

        $session = session();
        $session->destroy();
        return redirect()->to(base_url('auth'));
        
    }

    



}
