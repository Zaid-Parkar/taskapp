<title>Tasks</title>

<body>
<?= $this->include("header") ?>

    <h1>Tasks</h1>
<a href="<?= site_url("/tasks") ?>">&laquo;Back to index</a>
    <dl>
        <dt>ID</dt>
        <dd>
            <?= $task['id'] ?>
        </dd>
        <dt>Description</dt>
        <dd>
            <?= esc($task['description']) ?>
        </dd>
        <dt>Created at</dt>
        <dd>
            <?= $task['created_at'] ?>
        </dd>
        <dt>Updated at</dt>
        <dd>
            <?= $task['updated_at'] ?>
        </dd>
    </dl>






</body>

</html>