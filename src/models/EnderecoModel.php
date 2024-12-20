<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require './BaseModel.php';

class EnderecoModel extends BaseModel {

    private $table = 'endereco';

    private $fields = [
        'rua',
        'bairro',
        'numero',
        'cep',
        'complemento',
        'cidade',
        'estado',
        'id_pessoa',
    ];

    public function create($values) {

        $this->createAdjust($this->fields, $values);

        $sql = ("INSERT INTO {$this->table} ({$this->fieldsSTR}) VALUES ({$this->valuesSTR});");
        // INSERT INTO {$this->table} ('cpf','email','senha','excluido') VALUES ('546546654', 'fulanmo@email.com'...)

        return $this->execute($sql);
    }

    public function read($id) {
        
        // 'id','excluido','usuario_alteracao','data_criacao','data_atualizacao','cpf','email','senha';
        $this->readAdjust($this->fields);

        // SELECT * FROM Usuario WHERE id = 14;
        $sql = ("SELECT {$this->fieldsSTR} FROM {$this->table} WHERE id = {$id} LIMIT 1;");

        return $this->execute($sql);
    }

    public function readAll($page = 20) {
        
        $this->readAdjust($this->fields);

        $sql = ("SELECT {$this->fieldsSTR} FROM {$this->table} LIMIT {$page};");

        return $this->execute($sql);
    }

    public function update($id, array $values) {

        $this->updateAdjust($values);

        $sql = ("UPDATE {$this->table} SET $this->fieldsSTR WHERE id = {$id};");
        // UPDATE USUARIOS SET cpf = '123456', email = 'novoEmail@trallala.com' WHERE id = 1;

        return $this->execute($sql);
    }

    public function delete($id) {
        $sql = ("DELETE FROM {$this->table} WHERE id = {$id};");

        return $this->execute($sql);
    }

}
