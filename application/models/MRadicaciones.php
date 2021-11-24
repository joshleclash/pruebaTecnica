<?php
class MRadicaciones extends CI_Model 
{     
    private $table="Radicaciones";    
    private $rpta = array('heading'=>"Error, validacion formulario",'message'=>array('','Error, diligencie la informacion del formulario',''));
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function getWhere($where=null){
        try{
            if($where!=null){
                $query = $this->db->select("*")
                                  ->from($this->table)
                                  ->where($where)
                                  ->get();
            } else {
                $query = $this->db->select("*")
                                  ->from($this->table)
                                  ->get();
            }
            if (count($query->result())!= 0)
            {
                foreach ($query->result() as $fila) {
                    $data[] = $fila;
                }
                
                return $this->rpta=$data;
            } 
            else 
                return $this->rpta= false;
            
        } catch(Exception $e){
            return $this->db->_error_message();
        }   
    }
    public function update($id,$items)
    {
        try{
            $this->db->where('id',$id);
            $this->rpta=$this->db->update($this->table,$items);
            return $this->rpta;
        }catch(Exception $e){
            return $this->db->_error_message();
        } 
            
    }
    public function save($items){
        try{
            $this->rpta=$this->db->insert($this->table,$items);
            return $this->rpta;
        }catch(Exception $e){
            return $this->db->_error_message();
        } 
    }
            
    
}