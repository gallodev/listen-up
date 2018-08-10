<?php 
class Song_model extends CI_Model {

    private $id;
    private $nome;
    private $caminho;
    private $artista;
    private $genero;
    private $tags;
    private $qtde_clique;
    
    public function __construct(){

    }

    public function get_song($filter = false,$limit = false){

        $this->db->select('TB_MUSICA.ID,NOME,CAMINHO,ARTISTA,DESC_GENERO,QTD_CLIQUE');
        $this->db->from("TB_MUSICA");
        $this->db->join("TB_GENERO","TB_GENERO.ID = TB_MUSICA.FK_ID_GENERO");

        if($filter !== false)
           $this->db->like('NOME',$filter,'both');
           
        $this->db->order_by('QTD_CLIQUE','DESC');

        if($limit)
            $this->db->limit(5);

        return $this->db->get()->result();

    }

    public function update_qtde_clique($id){                

        $this->db->select('QTD_CLIQUE');
        $this->db->from('TB_MUSICA');
        $this->db->where('ID',$id);        
        $qtd_clique = intval($this->db->get()->first_row()->QTD_CLIQUE);

        $qtd_clique = $qtd_clique + 1;

        $data = array(
            'QTD_CLIQUE' => $qtd_clique
        );

        $this->db->where("ID",$id);
        return $this->db->update('TB_MUSICA',$data);

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

    public function get_tags(){
        return $this->tags;
    }

    public function set_tags($tags){
        $this->tags = $tags;
    }

    public function get_qtde_clique(){
        return $this->qtde_clique;
    }

    public function set_qtde_clique($qtde_clique){
        $this->qtde_clique = $qtde_clique;
    }

}

?>