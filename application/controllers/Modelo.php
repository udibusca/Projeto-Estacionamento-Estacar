<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Controller {

    function __construct() {
        parent::__construct();
        /* Carrega o model */
        $this->load->model('modelo_model', 'model', TRUE);
    }

    public function index($indice = null) {

        $dados['modelos'] = $this->model->listar();
       

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
        $this->load->view('listar_modelo', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_menu');
        $this->load->view('cadastra_modelo');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar(){
        
        $data['fabricante'] = $this->input->post('fabricante');
        $data['modelo'] = $this->input->post('modelo');

        /* Chama a função inserir do modelo */
        if ($this->model->inserir($data)){
            redirect('modelo/1');
        } else {
            redirect('modelo/2');
        }
    }

    public function excluir($CODIGO = null) {
        if ($this->model->deletar($CODIGO)) {
            redirect('modelo/3');
        } else {
            redirect('modelo/4');
        }
    }

    public function editar($CODIGO=null) {
        $data['modelos'] = $this->model->editar($CODIGO);
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_menu');
        $this->load->view('edita_modelo', $data);
        $this->load->view('includes/html_footer');
    }
    
    public function atualiza(){

        $data['CODIGO'] = $this->input->post('CODIGO');
        $data['fabricante'] = $this->input->post('fabricante');
        $data['modelo'] = $this->input->post('modelo');

        /* Chama a função inserir do modelo */
        if ($this->model->atualizar($data)) {
            redirect('modelo/5');
        } else {
            redirect('modelo/6');
        }
    }

    
}