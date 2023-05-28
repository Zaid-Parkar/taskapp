<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit user<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section > 
     <div class="form">
    
<h1>Edit user</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/admin/users/update/" . $user->id) ?>

    <?= $this->include('Admin/Users/form') ?>
    
    <button class="btn btn-primary">Save</button>
  <button class="btn btn-primary">  <a class="mbutton" href="<?= site_url("/admin/users/show/" . $user->id) ?>">Cancel</a></button>

</form></div>
</section>
<?= $this->endSection() ?>