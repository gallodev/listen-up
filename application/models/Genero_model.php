<?php 
class Genero_model extends CI_Model {

    private $id;
    private $desc_genero;
    
    public function __construct(){

    }

    public function get_generos(){
        $this->db->select('ID,DESC_GENERO');
        $this->db->from('TB_GENERO');
        return $this->db->get()->result();
    }

    public function get_id(){
        return $this->id;
    }

    public function set_id($id){
        $this->id = $id;
    }

    public function get_desc_genero(){
        return $this->desc_genero;
    }

    public function set_desc_genero($desc_genero){
        $this->desc_genero = $desc_genero;
    }



}

?>