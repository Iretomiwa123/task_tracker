<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .todo-container {
            max-width: 600px;
            margin: 0 auto;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        li.done {
            text-decoration: line-through;
            color: #999;
        }
        button {
            margin-left: 10px;
            padding: 5px 10px;
            cursor: pointer;
        }
        .task-details {
            flex-grow: 1;
        }
        .task-actions {
            display: flex;
            align-items: center;
        }
        select {
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <h1>Enhanced To-Do List</h1>

    <div class="todo-container">
        <input type="text" id="taskTitle" placeholder="Task Title" />
        <input type="text" id="taskDesc" placeholder="Task Description" />
        <button onclick="addTask()">Add Task</button>
        <ul id="taskList">
            <!-- Tasks will appear here -->
        </ul>
    </div>

    <script>
        // Function to add a new task with title and description
        function addTask() {
            let title = document.getElementById('taskTitle').value;
            let desc = document.getElementById('taskDesc').value;
            if (title === '') {
                alert('Please enter a task title!');
                return;
            }

            let ul = document.getElementById('taskList');
            let li = document.createElement('li');

            li.innerHTML = `
                <div class="task-details">
                    <strong>${title}</strong><br>
                    <small>${desc}</small>
                </div>
                <div class="task-actions">
                    <select onchange="updateStatus(this)">
                        <option value="undone">Undone</option>
                        <option value="pending">Pending</option>
                        <option value="done">Done</option>
                    </select>
                    <button onclick="editTask(this)">Edit</button>
                    <button onclick="removeTask(this)">Delete</button>
                </div>`;

            ul.appendChild(li);
            document.getElementById('taskTitle').value = ''; // Clear title input
            document.getElementById('taskDesc').value = ''; // Clear description input
        }

        // Function to update the status of the task
        function updateStatus(selectElement) {
            let li = selectElement.closest('li');
            if (selectElement.value === 'done') {
                li.classList.add('done');
            } else {
                li.classList.remove('done');
            }
        }

        // Function to edit a task
        function editTask(button) {
            let li = button.closest('li');
            let title = li.querySelector('strong').textContent;
            let desc = li.querySelector('small').textContent;

            // Prompt for new title and description
            let newTitle = prompt("Edit Task Title", title);
            let newDesc = prompt("Edit Task Description", desc);

            if (newTitle) li.querySelector('strong').textContent = newTitle;
            if (newDesc) li.querySelector('small').textContent = newDesc;
        }

        // Function to remove a task
        function removeTask(button) {
            let li = button.closest('li');
            li.remove();
        }
    </script>

</body>
</html>
