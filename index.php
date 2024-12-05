<?php
$conn = new mysqli('localhost', 'root', '', 'task_manager');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $description = $_POST['description'];
    $conn->query("INSERT INTO tasks (description) VALUES ('$description')");
}
$tasks = $conn->query("SELECT * FROM tasks");
?>
<form method="POST">
    Task: <input type="text" name="description"><br>
    <button type="submit">Add Task</button>
</form>
<h2>Tasks:</h2>
<ul>
    <?php while ($task = $tasks->fetch_assoc()): ?>
        <li><?php echo $task['description']; ?></li>
    <?php endwhile; ?>
</ul>
