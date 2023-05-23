<title>Tasks</title>
<body>

    
<h1>Tasks</h1>
    
    <ul>
        <?php foreach($tasks as $task): ?>
        
            <li>
                <?= $task['id'] ?>
                <?= $task['description'] ?>
            </li>
            
        <?php endforeach; ?>
    </ul>
</body>
</html>