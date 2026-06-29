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
                    <h1 class="display-5 fw-bold text-primary">📝 Gerenciador de Tarefas Pessoal</h1>
                    <p class="text-muted">Organize seu dia a dia.</p>
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
                                    <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição curta (opcional)">
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
                                    <?php if (empty($tarefas)): ?>
    <tr>
        <td colspan="5" class="text-center text-muted">Nenhuma tarefa cadastrada por enquanto. Comece adicionando uma acima!</td>
    </tr>
<?php else: ?>
    <?php foreach ($tarefas as $index => $tarefa): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td>
                <?php if ($tarefa['status'] === 'concluida'): ?>
                    <del class="text-muted"><?= htmlspecialchars($tarefa['titulo']) ?></del>
                <?php else: ?>
                    <strong><?= htmlspecialchars($tarefa['titulo']) ?></strong>
                <?php endif; ?>
            </td>
            <td class="text-muted">
                <?php if ($tarefa['status'] === 'concluida'): ?>
                    <del><?= htmlspecialchars($tarefa['descricao']) ?></del>
                <?php else: ?>
                    <?= htmlspecialchars($tarefa['descricao']) ?>
                <?php endif; ?>
            </td>
            <td>
                <?php if ($tarefa['status'] === 'concluida'): ?>
                    <span class="badge bg-success">Concluída</span>
                <?php else: ?>
                    <span class="badge bg-warning text-dark">Pendente</span>
                <?php endif; ?>
            </td>
            <td>
                <?php if ($tarefa['status'] === 'pendente'): ?>
                    <a href="index.php?action=concluir&id=<?= $tarefa['id'] ?>" class="btn btn-sm btn-success" title="Concluir tarefa">✓</a>
                <?php else: ?>
                    <button class="btn btn-sm btn-secondary" disabled>✓</button>
                <?php endif; ?>
                <a href="index.php?action=deletar&id=<?= $tarefa['id'] ?>" class="btn btn-sm btn-danger" title="Excluir tarefa" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">🗙</a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php endif; ?>
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