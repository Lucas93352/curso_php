<?php

require_once './src/Conexao.php';

class UsuarioModel {

    private $table = "Usuario";
    private $fields = [
        'id',
        'cpf',
        'email',
        'senha',
        'excluido',
        'usuario_alteracao',
        'data_criacao',
        'data_atalizacao',
    ];

    public function create($values) {

        $fieldsLocal = $this->fields;

        unset($fieldsLocal['id']);
        unset($fieldsLocal['usuario_alteracao']);
        unset($fieldsLocal['data_criacao']);
        unset($fieldsLocal['data_atalizacao']);

        $fieldsSTR = implode(',',$fieldsLocal);
        $valuesSTR = implode(',', $values);
    
        $sql = ("INSERT INTO ($$this->table) ($fieldsSTR) VALUES ({$valuesSTR});");
    }

    public function read($id) {

        $fieldsSTR = implode(',', $this->fields);
    
        $sql = ("SELEC ($fieldsSTR) FROM {$this ->table} WHERE id = ($id);");
    }

    public function readAll() {

        $fieldsSTR = implode(',', $this->fields);
    
        $sql = ("SELEC ($fieldsSTR) FROM {$this ->table}");   // ele esta selecionando todas as colunas da tabla 
    }

    public function update($id, $values) {

        $fieldsLocal = $this->fields;

        unset($fieldsLocal['id']);
        unset($fieldsLocal['usuario_alteracao']);
        unset($fieldsLocal['data_criacao']);
        unset($fieldsLocal['data_atalizacao']);

        foreach($values as $key => $value) {
            $fieldsLocal[$key] = $value[$key];
        }

        $fieldsSTR = implode(',', $fieldsLocal);

        $sql = ("UPDATE {$$this->table} SET $fieldsSTR WHERE ID = {$id};");
    }

    public function delete($id) {
        $sql = ("DELET FROM {$this->table} WHERE id ($id);");
    }
    
}
