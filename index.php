<?php
require_once('database/conn.php');

$tasks = [];

try {
    $sql = $pdo->query("SELECT * FROM task ORDER BY id ASC");

    if ($sql->rowCount() > 0) {
        $tasks = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (PDOException $e) {
    echo "Erro ao buscar tarefas: " . $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/styles/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container"> <!-- Adicionado para aplicar fundo branco transparente -->
        <div id="to_do">
            <h1>Things to do</h1>

            <form action="actions/create.php" method="POST" class="to-do-form">
                <input type="text" name="description" placeholder="Write your task here" required>
                <button type="submit" class="form-button">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </form>

            <div id="tasks">
                <?php foreach($tasks as $task): ?>
                    <div class="task">
                        <input 
                            type="checkbox" 
                            name="progress" 
                            class="progress <?= $task['completed'] ? 'done' : '' ?>"
                            data-task-id="<?= $task['id'] ?>"
                            <?= $task['completed'] ? 'checked' : '' ?>
                        >

                        <p class="task-description">
                            <?= htmlspecialchars($task['description']) ?>
                        </p>

                        <div class="task-actions">
                            <a class="action-button edit-button">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                            <a href="actions/delete.php?id=<?= $task['id']?>" class="action-button delete-button">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </div>

                        <form action="actions/update.php" method="POST" class="to-do-form edit-task hidden">
                            <input type="hidden" name="id" value="<?= $task['id'] ?>">
                            <input 
                                type="text"
                                name="description" 
                                value="<?= htmlspecialchars($task['description']) ?>"
                            >
                            <button type="submit" class="form-button confirm-button">
                                <i class="fa-solid fa-check"></i>
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="src/javascript/script.js"></script>
</body>
</html>
