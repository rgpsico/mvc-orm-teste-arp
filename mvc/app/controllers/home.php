<?php 

class Home extends Controller 
{
    protected $user;
    public function __construct()
    {
        $this->user = $this->model('User');
        
    }
    public function index($name = '')
    {
        $user  = $this->model('User');
        $user->name =  $name;
      
        $this->view('home/index',['name'=>$user->name]);
    }

    public function create($username = '' , $email = '') 
    {
       User::create([
            'username'=>$username,
            'email'=>$email
        ]);

    }





  
}