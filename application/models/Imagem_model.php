<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagem_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function salvar($imagem) {
        $this->db->insert('imagem', $imagem);
    }
}