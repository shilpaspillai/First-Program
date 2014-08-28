<?php
class Admin extends CI_Controller{
    public function __construct()
    {
    parent::__construct();
    $this->load->model('data_list');
    }
    
    public function index()
    {    
    $data['groups'] = $this->data_list->getAllGroups();
    if(isset($_GET['login']))
    {
    $this->load->model('Log');
    $qry= $this->Log->verify($_POST);
     if($qry==0)
     {
         $this->load->view('login');
     }
    }
    else if(isset($_GET['home']))
    {
    $this->load->view('home');
    }
    else if(isset($_GET['com']))
    {
    $this->load->view('add-company');
    }
    else if(isset($_GET['user']))
    {
    $this->load->view('add-user',$data);
    }
    else if(isset($_GET['signout']))
    {
    $this->load->model('logout');
    $this->logout->log_out();
    $this->load->view('login');
    }
    else if(isset($_GET['insert']))
    {
    $this->load->model('Add_company');
    $qry= $this->Add_company->detail($_POST);
    if($qry==0)
    {
    $this->load->view('home');   
    }
    if($qry==1)
    { $this->load->view('home');
    }
    }
    else if(isset($_GET['login']))
    { 
    $this->load->model('User_check');
    $qr=$this->User_check->check($_POST);
    if($qr)
    {
    $this->load->view('home');
    }
    }
    else if(isset($_GET['sign']))
    {
    $this->load->model('Log');
    $this->load->view('user_land',array("str"=>$this->Log->validate()));
    }
    elseif (isset($_GET['out']))
    {
    $this->load->model('logout');
    $this->logout->log_out();
    $this->load->view('login');
    }
    else if(isset($_GET['usr1']))
    {
    $this->load->model('User_check');
    $qr=$this->User_check->check($_POST);
    if($qr==0)
    {
    $this->load->view('add-user');  
    }
    elseif ($qr==1)
    {
    $this->load->view('home');
    }
    }
    elseif (isset($_GET['enter'])) 
    {
    $this->load->view('login');
    }
    elseif (isset($_GET['re'])) 
    {
    $this->load->view('login');
    }
    else
    {
    $this->load->view('login');
    }
    }
 }

?>
