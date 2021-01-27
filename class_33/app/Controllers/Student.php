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

	public function search()
	{


		$data = array();
		$model = new StudentM();
		$data['search'] = $_GET['search'];
		$data['students'] = $model->like('name',$_GET['search'])->findAll();
		$data['main_content'] = view('student_list',$data);

		return view('layout',$data);
	}

	public function add()
	{

		$data = array();

		$data['main_content'] = view('student_add',$data);

		return view('layout',$data);
	}

	public function edit($student_id)
	{
		$model = new StudentM();

		$data = array();
		$data['student_id'] = $student_id;
		$data['student'] = $model->where('student_id',$student_id)->first();
		$data['main_content'] = view('student_edit',$data);
		return view('layout',$data);
	}


	public function operation($student_id = false)
	{


		if($_POST){

			$model = new StudentM();
			if($student_id){
				$model->update($student_id,$_POST);
			}else{
				$model->insert($_POST);
			}
			return redirect()->to(base_url());

		}



	}


	public function delete($student_id)
	{

		$model = new StudentM();
		$model->delete($student_id);
		return redirect()->to(base_url());

	}





}
