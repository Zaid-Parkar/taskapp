<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit task<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section >  <div class="form">
<h1>Edit task</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/tasks/update/" . $task->id) ?>

    <?= $this->include('Tasks/form') ?>
    
    <button class="btn btn-primary m-2">Save</button>
    <button class="btn btn-primary m-2"><a class="mbutton" href="<?= site_url("/tasks/show/" . $task->id) ?>">Cancel</a></button>

</form>
</section>
<?= $this->endSection() ?>