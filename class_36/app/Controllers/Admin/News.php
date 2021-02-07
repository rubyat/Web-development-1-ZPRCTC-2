<?php


namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\NewsM;


class News extends BaseController
{
	public function index()
	{


        $data['page'] = 'News';
        $model = new NewsM();
        $data['newss'] = $model->findAll();
		$data['main_content'] = view('admin/news/list',$data);
		return view('admin/layout',$data);
    }

	public function add()
	{

        $data['page'] = 'News Add';
        $data['news'] = false;
        $data['news_id'] = false;
		$data['main_content'] = view('admin/news/form',$data);
		return view('admin/layout',$data);
    }

	public function edit($news_id)
	{

        $model = new NewsM();
		$data['page'] = 'News Add';
        $data['news_id'] = $news_id;
        $data['news'] = $model->where('news_id',$news_id)->first();

		$data['main_content'] = view('admin/news/form',$data);
		return view('admin/layout',$data);
    }

	public function operation($news_id = false)
	{

        if($_POST){


            $model = new NewsM();

            $sData['title'] =  $_POST['title'];
            $sData['details'] =  $_POST['details'];
            
            if($_FILES['image']['name']){

                $img = $this->request->getFile('image');
                $imageName = $img->getRandomName();
                $img->move('uploads/img',$imageName);
                $sData['image'] = 'uploads/img/' . $imageName;

            } 
            
            if($_FILES['side_image']['name']){

                $img = $this->request->getFile('side_image');
                $imageName = $img->getRandomName();
                $img->move('uploads/img',$imageName);
                $sData['side_image'] = 'uploads/img/' . $imageName;
            } 
            

			if($news_id){
				$model->update($news_id,$sData);
			}else{
				$model->insert($sData);
			}
			return redirect()->to(base_url('admin/news'));


        }
		
    }


    public function delete($news_id){

        $model = new NewsM();
        $model->delete($news_id);
        return redirect()->to(base_url('admin/news'));

    }



    public function fix_image(){

        $model = new NewsM();
        $news = $model->findAll();

        
        foreach($news as $n){
            echo $n['news_id'];
            echo '<br />';
            echo $n['image'].'::: uploads/'.$n['image'];
            echo '<br />';
            echo $n['side_image'].'::: uploads/'.$n['side_image'];
            echo '<hr />';

            // $sData = array(

            //     'image' => 'uploads/'.$n['image'],
            //     'side_image' => 'uploads/'.$n['side_image'],

            // );

            //$model->update($n['news_id'],$sData);

        }

    }
    



}
