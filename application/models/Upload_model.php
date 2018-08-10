<?php 
class Song_model extends CI_Model {

    private $id;
    private $nome;
    private $caminho;
    private $artista;
    private $genero;
    
    public function __construct(){

    }

    public function get_song($filter = false){

        $this->db->select('ID,NOME,CAMINHO,ARTISTA,DESC_GENERO');
        $this->db->from("TB_MUSICA");
        $this->db->join("TB_GENERO","TB_GENERO.ID = TB_MUSICA.FK_ID_GENERO");

        if($filter !== false)
           $this->db->like('NOME',$filter,'both');
           
        return $this->db->get()->result();

    }

    public function save(){        

        $data = [
            'NOME' => $this->input->post('inputNome'),
            'CAMINHO' => $this->input->post('local_file'),
            'ARTISTA' => $this->input->post('inputArtista'),
            'TAGS' => $this->input->post('inputTags'),
            'FK_ID_GENERO' => $this->input->post('inputGenero')
        ];
        
        $insert = $this->db->insert('TB_MUSICA', $data);

        return $insert;
    }

    public function get_id(){
        return $this->id;
    }

    public function set_id($id){
        $this->id = $id;
    }

    public function get_nome(){
        return $this->nome;
    }

    public function set_nome($nome){
        $this->nome = $nome;
    }

    public function get_caminho(){
        return $this->caminho;
    }

    public function set_caminho($caminho){
        $this->caminho = $caminho;
    }

    public function get_artista(){
        return $this->artista;
    }

    public function set_artista($artista){
        $this->artista = $artista;
    }

    public function get_genero(){
        return $this->genero;
    }

    public function set_genero($genero){
        $this->genero = $genero;
    }

}

?>