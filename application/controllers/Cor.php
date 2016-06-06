<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cor extends CI_Controller {

    function __construct() {
        parent::__construct();
        /* Carrega o model */
        $this->load->model('cor_model', 'model', TRUE);
    }

    public function index($indice = null) {

        $dados['cor'] = $this->model->listar();
       

        $this->load->view('includes/html_header');
        $this->load->view('includes/html_menu');
        if ($indice == 1) {
            $data['msg'] = "Registro inserido com sucesso";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Falha ao inserir o registro";
            $this->load->view('includes/msg_erro', $data);
        }
        if ($indice == 3) {
            $data['msg'] = "Registro excluido com sucesso";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Falha ao excluir o registro";
            $this->load->view('includes/msg_erro', $data);
        }
        if ($indice == 5) {
            $data['msg'] = "Registro atualizado com sucesso";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Falha ao atualizar o registro";
            $this->load->view('includes/msg_erro', $data);
        }        
        $this->load->view('listar_cor', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_menu');
        $this->load->view('cadastra_cor');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar(){
        
        $data['nome'] = $this->input->post('nome');

        /* Chama a função inserir do modelo */
        if ($this->model->inserir($data)){
            redirect('cor/1');
        } else {
            redirect('cor/2');
        }
    }

    public function excluir($id = null) {
        if ($this->model->deletar($id)) {
            redirect('cor/3');
        } else {
            redirect('cor/4');
        }
    }

    public function editar($cor=null) {
        $data['cor'] = $this->model->editar($cor);
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_menu');
        $this->load->view('edita_cor', $data);
        $this->load->view('includes/html_footer');
    }
    
    public function atualiza(){

        $data['id'] = $this->input->post('id');
        $data['nome'] = $this->input->post('nome');

        /* Chama a função inserir do modelo */
        if ($this->model->atualizar($data)) {
            redirect('cor/5');
        } else {
            redirect('cor/6');
        }
    }

    
}