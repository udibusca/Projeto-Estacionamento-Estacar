<?php

class Modelo_model extends CI_Model {

    public static $tabela = 'carro';

    function __construct() {
        parent::__construct();
    }

    function inserir($data) {
        $this->db->insert(self::$tabela, $data);
        return $this->db->insert_id();
    }

    function listar() {

        $this->db->select('ca.id as "id_carro",
                           ca.tipo as "tipo_carro",
                           ca.nome as "nom_carro",
                           ca.id_fabricante as "id_fabricante",
                           fa.id as "id_tabela_fabricante",
                           fa.nome as "nom_fabricante"');
        $this->db->from('carro ca');
        $this->db->join('fabricante fa', 'ca.ID_FABRICANTE = fa.ID');
        $query = $this->db->get();
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
