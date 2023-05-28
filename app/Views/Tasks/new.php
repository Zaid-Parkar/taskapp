<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>New task<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
    <div class="form" style="width:30%; margin: 2%;">
<h1>New task</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/tasks/create") ?>

    <?= $this->include('Tasks/form') ?>
    
    <button class="btn btn-primary m-2"><a class="mbutton">Save</button>
    <button class="btn btn-primary m-2"><a class="mbutton" href="<?= site_url("/tasks") ?>">Cancel</href=></a></button>

</form>
    </div>
</section>
<?= $this->endSection() ?>