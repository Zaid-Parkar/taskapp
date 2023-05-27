<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title><?= $this->renderSection("title") ?></title>
    <link rel="stylesheet" type="text/css" href="<?= site_url('/css/auto-complete.css') ?>">
</head>


<body>


<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Taskapp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= site_url("/") ?>">Home</a>
        <?php if (!current_user()): ?>
        <a class="nav-link" href="<?= site_url("/signup") ?>">Signup</a>
        <a class="nav-link" href="<?= site_url("/login") ?>">Login</a>
        <?php endif; ?>
      </div>
    </div>
  <div class="d-flex">    <span class="navbar-text">

        
        <p>Hello <?= esc(current_user()->name) ?></p>
      </span>
       </div>
    </div>

</nav>











    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;height: 40px;" >
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">T</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <?php if (current_user()): ?>
        <a class="nav-link"  href="<?= site_url("/profile/show") ?>">Profile</a>
        <?php if (current_user()->is_admin): ?>
        <a class="nav-link" href="<?= site_url("/admin/users") ?>">Users</a>
        <?php endif; ?>
        <a class="nav-link" href="<?= site_url("/tasks") ?>">Tasks</a>
        <a class="nav-link" href="<?= site_url("/logout") ?>">Log out</a>
        <?php endif; ?>
      </div>
    </div>
    </div>

</nav>

    
        
  
        
        
        
   

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






