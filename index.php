<?php
// Definição do fuso horário para evitar problemas com o banco de dados e funções de data/hora
date_default_timezone_set('America/Sao_Paulo');

require_once "controllers/TarefaController.php";

$controller = new TarefaController();

// Aqui ele vai ler qual ação o usuário quer tomar através da URL (ex: index.php?action=salvar)
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Switch para decidir qual método do controller chamar baseado na ação
switch ($action) {
    case 'salvar':
        $controller->salvar();
        break;
    case 'concluir':
        $controller->concluir();
        break;
    case 'deletar':
        $controller->deletar();
        break;
    default:
        $controller->index();
        break;
}