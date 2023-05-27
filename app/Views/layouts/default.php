<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title><?= $this->renderSection("title") ?></title>
    <link rel="stylesheet" type="text/css" href="<?= site_url('/css/auto-complete.css') ?>">
</head>
<body>

    <a href="<?= site_url("/") ?>">Home</a>

    <?php if (current_user()): ?>
        
        <p>Hello <?= esc(current_user()->name) ?></p>
        
        <a href="<?= site_url("/profile/show") ?>">Profile</a>
        
        <?php if (current_user()->is_admin): ?>
            
            <a href="<?= site_url("/admin/users") ?>">Users</a>
            
        <?php endif; ?>
        
        <a href="<?= site_url("/tasks") ?>">Tasks</a>
        
        <a href="<?= site_url("/logout") ?>">Log out</a>
        
    <?php else: ?>
        
        <a href="<?= site_url("/signup") ?>">Sign up</a>    
        
        <a href="<?= site_url("/login") ?>">Log in</a>
        
    <?php endif; ?>

    <?php if (session()->has('warning')): ?>
        <div class="warning">
            <?= session('warning') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('info')): ?>
        <div class="info">
            <?= session('info') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="error">
            <?= session('error') ?>
        </div>
    <?php endif; ?>

    <?= $this->renderSection("content") ?>
    
</body>
</html>






