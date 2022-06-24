<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

	
    public function __construct()
    {
        parent::__construct();

        //Load model
        $this->load->model('Q_model');
        
    }
    
	public function display()
	{
        // $this->load->library('database');
		
       $data= $this->Q_model->show();

       echo "<pre>";

    //    print_r(json_encode(_$data));

        echo json_encode($data);
        
    //  $this->load->view('questionView',$data);

      
       
        
	}
	public function test()
	{
		echo "this is test";
       
        
	}
}
