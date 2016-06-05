<?php
class Usuario_model extends CI_Model {
    
    public static $tabela = 'usuario';
          
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
    function deletar($CODIGO) {
        $this->db->where('CODIGO', $CODIGO);
        return $this->db->delete(self::$tabela);
    }

    function editar($CODIGO) {
        $this->db->where('CODIGO', $CODIGO);
        $query = $this->db->get(self::$tabela);
        return $query->result();
    }

    function atualizar($data) {
        $this->db->where('CODIGO', $data['CODIGO']);
        $this->db->set($data);
        return $this->db->update(self::$tabela);
    }
    
}
