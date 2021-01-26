<?php namespace App\Controllers;
use App\Models\StudentM;

class Student extends BaseController
{
	public function index()
	{

		$data = array();

		$model = new StudentM();
		$data['students'] = $model->findAll();
		$data['main_content'] = view('student_list',$data);

		return view('layout',$data);
	}

	public function add()
	{

		$data = array();

		$data['main_content'] = view('student_add',$data);

		return view('layout',$data);
	}

	public function edit()
	{

		$data = array();

		$data['main_content'] = view('student_edit',$data);

		return view('layout',$data);
	}


	public function operation()
	{


		if($_POST){

			$model = new StudentM();
			$model->insert($_POST);

			return redirect()->to(base_url());

		}



	}


}
