<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>New user<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section >  <div class="form">
<h1>New user</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/admin/users/create") ?>

    <?= $this->include('Admin/Users/form') ?>
    
    <button class="btn btn-primary">Save</button>
    <button class="btn btn-primary">  <a class="mbutton"  href="<?= site_url("/admin/users") ?>">Cancel</a></button>

</form></div>
</section>
<?= $this->endSection() ?>