<title>Tasks</title>
<body>

    
<h1>Tasks</h1>
    
    <ul>
        <?php foreach($tasks as $task): ?>
        
            <li>
            <a href="<?= site_url("/tasks/show/".$task['id'])  ?>"> 
             <?= esc($task['description']) ?></a> 
            </li>
            
        <?php endforeach; ?>
    </ul>
</body>
</html>