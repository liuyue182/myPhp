<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function login()
    {
        $this->load->view('login');
    }
    public function reg()
    {
        $this->load->view('reg');
    }
    public function save()
    {
//        1.接受数据
        $name = $this->input->post('username');
        $pwd1 = $this->input->post('pwd1');
        $pwd2 = $this->input->post('pwd2');
        $data=array();
//        2.验证数据
        if($name==''){
            $data['name_error'] ='用户名不能为空';
//            $this->load->view('reg',$data);
            //$data的位置只能传数组
//            redirect('welcome/reg');
        }
        if($pwd1!=$pwd2){
            $data['pwd_error'] ='两次密码不一致';
            //$data的位置只能传数组
//            redirect('welcome/reg');
        }
        if(count($data) !=  0){
            $this->load->view('reg',$data);
        }
        else{
            $this -> load ->model("User_model");
            $row=$this -> User_model -> save($name,$pwd1);

            if($row!=0){
            echo 'success';
            }
            else echo 'fail';
        }

    }
    public function login_check()
    {
        $name = $this->input->post('username');
        $pwd1 = $this->input->post('pwd1');
        $this->load->model("User_model");
         $result=$this->User_model->get_user_by_name_amd_pwd($name,$pwd1);
         $this->load->view('welcome_message',array(
             'user'=>$result
         ));
    }
}
//   http://localhost/CI/welcome/login
//   http://localhost/项目名/控制器名/方法名