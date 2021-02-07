<?php


namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\SliderM;


class Slider extends BaseController
{
	public function index()
	{

        $data['page'] = 'Slider';
        $model = new SliderM();
        $data['sliders'] = $model->findAll();
		$data['main_content'] = view('admin/slider/list',$data);
		return view('admin/layout',$data);
    }

	public function add()
	{

        $data['page'] = 'Slider Add';
        $data['slider'] = false;
        $data['slider_id'] = false;
		$data['main_content'] = view('admin/slider/form',$data);
		return view('admin/layout',$data);
    }

	public function edit($slider_id)
	{

        $model = new SliderM();
		$data['page'] = 'Slider Add';
        $data['slider_id'] = $slider_id;
        $data['slider'] = $model->where('slider_id',$slider_id)->first();

		$data['main_content'] = view('admin/slider/form',$data);
		return view('admin/layout',$data);
    }

	public function operation($slider_id = false)
	{

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
		set_time_limit ( -1);
		ini_set('memory_limit', -1);

        if($_POST){


            $model = new SliderM();

            $sData['title'] =  $_POST['title'];
            
            if($_FILES['image']['name']){

                $img = $this->request->getFile('image');
                $imageName = $img->getRandomName();
                $img->move('uploads/img',$imageName);
                $sData['image'] = 'uploads/img/' . $imageName;

            } 
            

			if($slider_id){
				$model->update($slider_id,$sData);
			}else{
				$model->insert($sData);
			}
			return redirect()->to(base_url('admin/slider'));


        }
		
    }


    public function delete($slider_id){

        $model = new SliderM();
        $model->delete($slider_id);
        return redirect()->to(base_url('admin/slider'));

    }
    



}
