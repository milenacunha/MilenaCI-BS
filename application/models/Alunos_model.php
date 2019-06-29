<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($p) {
        return $this->db->insert('alunos', $p); //'alunos' é o nome da tabela
    }

    function deletar($Id_Aluno) {
        $this->db->where('Id_Aluno', $Id_Aluno);
        return $this->db->delete('alunos');
    }

    function editar($Id_Aluno) {
        $this->db->where('Id_Aluno', $Id_Aluno);
        $result = $this->db->get('alunos');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('Id_Aluno', $data['Id_Aluno']);
        $this->db->set($data);
        return $this->db->update('alunos');
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('alunos');
        $query = $this->db->get();
        return $query->result();
    }

}
