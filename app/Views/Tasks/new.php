<title>Tasks</title>

<body>
<?= $this->include("header") ?>

    <h1>New Task</h1>
<?php if (session()->has('errors')):?>
<ul>
    <?php foreach(session('errors') as $error) : ?>
        <li> <?= $error ?></li>
        <?php endforeach; ?>
</ul>
<?php endif; ?>

    <div>
        <?= form_open("/tasks/create") ?>
        <label for="descriptions">Descriptions</label>
        <input type="text" name="description" id="description" value="">
    </div>
    <button>Save</button>
    <a href="<?= site_url("/tasks") ?>">Cancel</a>
    </form>

</body>

</html>