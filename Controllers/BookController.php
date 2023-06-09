<?php

namespace App\Controllers;
use  App\Models\Book;


class BookController extends BaseController{

// index controller function to get data
     public function index()
    {
       $model = model(Book::class);

        $data= $model->getdata();
		
		echo json_encode($data);

    }
 // to save data
	public function savedata(){
		
		  $model = model(Book::class);
		 
			$result = $model->save([
            'name' => $this->request->getPost('name'),      
            'email'  => $this->request->getPost('email'),
		    'address'  => $this->request->getPost('address'),
			 'phone'  => $this->request->getPost('phone'),
        ]);
		echo json_decode($result);
		 
		
	}
	// to delete the data from the database
	public function delete($id){
		$model=model(Book::class);
		$result=$model->delete($id);
		
		echo json_encode($result);
			
	}
	
}
