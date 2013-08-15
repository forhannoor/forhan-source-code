<?php 

class usa_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_usa()
    {
      	$data['main']='usa_cities/cities_usa.php';
      	$data['heading']='Cities of the USA';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_cities/cities_usa', $data);
    }
    





}