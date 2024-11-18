<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

</head>
<body>
    <div class="todo-container">
        <h1>To-Do List</h1>

        <!-- Form to add a new task -->
        <form class="input-section" action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Enter new task" required>
            <button type="submit">Add Task</button>
        </form>

        <?php include 'db.php'; ?>

        <!-- Task table -->
        <table>
            <tr>
                <th>Task</th>
                <th>Actions</th>
            </tr>
            <?php
            // Fetch and display tasks from the database
            $result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['task']) . "</td>";
                echo "<td class='action-links'>
  
                echo "</tr>";
            }
            ?>
        </table>
    </div>