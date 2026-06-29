<?php

class Tarefa {
    private $conn;
    private $table_name = "tarefas";

    // Propriedades da Tarefa
    public $id;
    public $titulo;
    public $descricao;
    public $status;

    // Construtor que recebe a conexão com o banco de dados
    public function __construct($db) {
        $this->conn = $db;
    }

    // Função para listar todas as tarefas
    public function listarTodas() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY data_criacao DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Função para criar uma nova tarefa
    public function criar() {
        $query = "INSERT INTO " . $this->table_name . " (titulo, descricao) VALUES (:titulo, :descricao)";
        $stmt = $this->conn->prepare($query);

        // Limpar dados contra códigos maliciosos (Sanitize)
        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->descricao = htmlspecialchars(strip_tags($this->descricao));

        // Vincular os valores
        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":descricao", $this->descricao);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Função para marcar uma tarefa como concluída
    public function marcarComoConcluida($id) {
        $query = "UPDATE " . $this->table_name . " SET status = 'concluida' WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        
        return $stmt->execute();
    }

    // Função para deletar uma tarefa
    public function deletar($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);

        return $stmt->execute();
    }
}