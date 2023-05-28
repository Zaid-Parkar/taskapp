<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete task<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section  >
<h1>Delete task</h1>

<p>Are you sure?</p>

<?= form_open("/tasks/delete/" . $task->id) ?>

    <button class="btn btn-primary">Yes</button>
    <button class="btn btn-primary"><a class="mbutton" href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancel</a></button>
    
</form>
</section>
<?= $this->endSection() ?>