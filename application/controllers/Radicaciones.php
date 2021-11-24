<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radicaciones extends CI_Controller {

	
	public function index()
	{
            /*
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
                }
		*/
	}
        public function load()
        {
            $this->load->model("MRadicaciones");
                    $arrayWhere=array("id"=>$_POST["id"]);
                    $data=$this->MRadicaciones->getWhere($arrayWhere);
                    
                    echo json_encode($data[0]);
                    
        }
        public function modifi()
        {
            $success=false;
            $this->load->model("MRadicaciones");
            if($_POST["radicaciones_id"]=="")
            {
                $items=array("nombre"=>$_POST["radicaciones_nombre"],"asunto"=>$_POST["radicaciones_asunto"],"solicitud"=>$_POST["radicaciones_solicitud"],"usuario_id"=>$this->session->userdata("userActive")->id);
                $success= $this->MRadicaciones->save($items);
            }
            else
            {
                $items=array("nombre"=>$_POST["radicaciones_nombre"],"asunto"=>$_POST["radicaciones_asunto"],"solicitud"=>$_POST["radicaciones_solicitud"]);
                $success= $this->MRadicaciones->update($_POST["radicaciones_id"],$items);
                
            }
            $msg=$success==true?"Informacion almacenada correctamente":"Existio  algun error al almacenar la informacion";
            $response=array("msg"=>"informacion almacenada correctamente","success"=>$success);
            echo json_encode($response);
        }
        
        public function loadDataTable()
        {
                    $this->load->model("MRadicaciones");
                    $arrayWhere=array("usuario_id"=>$this->session->userdata("userActive")->id);
                    $data=$this->MRadicaciones->getWhere($arrayWhere);
                    $response=array();
                    foreach($data as $k=>$v):
                        $response[]=$v;
                    endforeach;
                    $this->load->view("Radicaciones/dataTable",array("data"=>$response));
        }
}
?>