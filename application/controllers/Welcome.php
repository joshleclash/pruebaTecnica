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
                $this->load->library("loginhelper");
                $this->loginhelper->set($this->session->userdata("userActive"));
                if($this->loginhelper->exists())
                {
                    $this->load->model("MRadicaciones");
                    $arrayWhere=array("usuario_id"=>$this->session->userdata("userActive")->id);
                    $data=$this->MRadicaciones->getWhere($arrayWhere);
                    $response=array();
                    foreach($data as $k=>$v):
                        $response[]=$v;
                    endforeach;
                    $this->load->view("home",array("data"=>$response));
                }else{
                    $this->load->view('welcome_message');
                }
		
	}
        public function login()
        {
            $this->load->model('Usuarios');
            $where=array("email"=>$_POST["user_user"]);
            $data=$this->Usuarios->getWhere($where);
            $response=array("success"=>false,"msg"=>"Alerta, credenciales no válidas");
            foreach($data as $k=>$v):
                $atemp=$v->failed;
                $atemp=$atemp+1;
                if($v->failed==3)
                {
                    $response=array("success"=>false,"msg"=>"Error, ingreso la contraseña MAL, mas de 3 veces y se bloqueo, por favor esriba a joshleclash@gmail.com");
                    break;
                }
                if($v->password==$_POST["user_password"])
                {
                    $this->session->set_userdata("userActive",$v);
                    $response=array("success"=>true,"msg"=>"Bienvenido, Se ha logueado con éxito a la plataforma","data"=>$data);
                    break;
                }else{
                    $data=array("failed"=>$atemp);
                    $this->Usuarios->update($v->id,$data);
                }
            endforeach;
            echo json_encode($response);
            
        }
        public function home()
        {
            $this->load->library("loginhelper");
            $this->loginhelper->set($this->session->userdata("userActive"));
            $this->loginhelper->exists();
            $this->load->view("home");
            
        }
        
        
}
