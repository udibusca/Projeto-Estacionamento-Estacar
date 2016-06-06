<?php
class Cor_model extends CI_Model {
    
    public static $tabela = 'cor';
          
    function __construct() {
        parent::__construct();
    }
    function inserir($data) {
        $this->db->insert(self::$tabela, $data);
        return $this->db->insert_id();
    }
    function listar() {
        $query = $this->db->get(self::$tabela);
        return $query->result();
    }    
    function deletar($id) {
        $this->db->where('id', $id);
        return $this->db->delete(self::$tabela);
    }

    function editar($id) {
        $this->db->where('id', $id);
        $query = $this->db->get(self::$tabela);
        return $query->result();
    }

    function atualizar($data) {
        $this->db->where('id', $data['id']);
        $this->db->set($data);
        return $this->db->update(self::$tabela);
    }
    
}
