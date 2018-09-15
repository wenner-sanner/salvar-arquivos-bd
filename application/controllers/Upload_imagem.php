<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_imagem extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('upload-imagem');
    }

    public function salvar() {
        $config['upload_path'] = FCPATH . "assets/uploads/demandas";
        $config['allowed_types'] = "jpg|jpeg|gif|png";
        $config['encrypt_name'] = TRUE;

        $this->load->library("upload", $config);

        if ($this->upload->do_upload("imagem") ) {
            $info_arquivo = $this->upload->data();
            $nome_arquivo = $info_arquivo["file_name"];

            $this->load->model('imagem_model', 'model_imagem');

            $imagem = array(
                "caminho" => $nome_arquivo
            );

            $cadastro = $this->model_imagem->salvar($imagem);

            if ($cadastro) {
                echo "Imagem salva com sucesso";
            } else {
                echo "Erro ao salvar imagem";
            }

            var_dump($info_arquivo);

        } else {
            $erros = $this->upload->display_errors();

            print_r($erros);
        }

    }
}