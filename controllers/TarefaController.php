<?php
require_once "database/conexao.php";
require_once "models/Tarefa.php";

class TarefaController {
    private $db;
    private $tarefaModel;

    public function __construct() {
        // Aqui vai iniciar o banco e o model
        $database = new Database();
        $this->db = $database->getConnection();
        $this->tarefaModel = new Tarefa($this->db);
    }

    // Função para exibir a página principal com a lista de tarefas
    public function index() {
        $tarefas = $this->tarefaModel->listarTodas();
        // Coloca a view e passa a variável $tarefas para ela
        require_once "views/home.php";
    }

    // Função para processar a criação de uma tarefa
    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['titulo'])) {
            $this->tarefaModel->titulo = $_POST['titulo'];
            $this->tarefaModel->descricao = $_POST['descricao'];

            $this->tarefaModel->criar();
        }
        // Vai de volta para a página principal
        header("Location: index.php");
    }

    // Função para processar a conclusão de uma tarefa
    public function concluir() {
        if (isset($_GET['id'])) {
            $this->tarefaModel->marcarComoConcluida($_GET['id']);
        }
        header("Location: index.php");
    }

    // Função para processar a exclusão de uma tarefa
    public function deletar() {
        if (isset($_GET['id'])) {
            $this->tarefaModel->deletar($_GET['id']);
        }
        header("Location: index.php");
    }
}