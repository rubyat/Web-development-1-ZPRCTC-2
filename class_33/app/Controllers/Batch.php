<?php namespace App\Controllers;
use App\Models\BatchM;

class Batch extends BaseController
{
	public function index()
	{

		$data = array();

		$model = new BatchM();
		$data['batchs'] = $model->findAll();
		$data['main_content'] = view('batch_list',$data);

		return view('layout',$data);
	}

	public function add()
	{

		$data = array();

		$data['main_content'] = view('batch_add',$data);

		return view('layout',$data);
	}

	public function edit($batch_id)
	{
		$model = new batchM();

		$data = array();
		$data['batch_id'] = $batch_id;
		$data['batch'] = $model->where('batch_id',$batch_id)->first();
		$data['main_content'] = view('batch_edit',$data);
		return view('layout',$data);
	}


	public function operation($batch_id = false)
	{


		if($_POST){

			$model = new batchM();
			if($batch_id){
				$model->update($batch_id,$_POST);
			}else{
				$model->insert($_POST);
			}
			return redirect()->to(base_url('batch'));

		}



	}


	public function delete($batch_id)
	{

		$model = new batchM();
		$model->delete($batch_id);
		return redirect()->to(base_url('batch'));

	}





}
