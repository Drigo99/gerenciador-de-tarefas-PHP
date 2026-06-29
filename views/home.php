<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                
                <div class="text-center mb-4">
                    <h1 class="display-5 fw-bold text-primary">📝 Meu Gerenciador de Tarefas</h1>
                    <p class="text-muted">Organize seu dia a dia de forma simples</p>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Nova Tarefa</h5>
                        <form id="formTarefa" action="index.php?action=salvar" method="POST">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título da tarefa..." required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição curta (opcional)...">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary w-100">Adicionar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Minhas Tarefas</h5>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 5%">#</th>
                                        <th style="width: 25%">Título</th>
                                        <th style="width: 40%">Descrição</th>
                                        <th style="width: 15%">Status</th>
                                        <th style="width: 15%">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><strong>Estudar PHP</strong></td>
                                        <td class="text-muted">Revisar o padrão MVC e fazer o commit</td>
                                        <td><span class="badge bg-warning text-dark">Pendente</span></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-success">✓</a>
                                            <a href="#" class="btn btn-sm btn-danger">🗙</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><del class="text-muted">Criar banco de dados</del></td>
                                        <td class="text-muted"><del>Rodar o script SQL no phpMyAdmin</del></td>
                                        <td><span class="badge bg-success">Concluída</span></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-secondary disabled">✓</a>
                                            <a href="#" class="btn btn-sm btn-danger">🗙</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="views/assets/js/main.js"></script>
</body>
</html>