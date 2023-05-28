<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section>
    <div class="form">

<button class="btn btn-primary m-2"><a class="mbutton" href="<?= site_url("/tasks") ?>">&laquo; back to index</a></button>
<h1>Task</h1>
<dl>
    <dt>ID</dt>
    <dd><?= $task->id ?></dd>
    
    <dt>Description</dt>
    <dd><?= esc($task->description) ?></dd>
    
    <dt>Created at</dt>
    <dd><?= $task->created_at ?></dd>
    
    <dt>Updated at</dt>
    <dd><?= $task->updated_at ?></dd>
</dl>

<button class="btn btn-primary" ><a class="mbutton" href="<?= site_url('/tasks/edit/' . $task->id) ?>">Edit</href=></a></button>
<button class="btn btn-primary m-2"><a class="mbutton" href="<?= site_url('/tasks/delete/' . $task->id) ?>">Delete</></a></button>
    </div></section>
<?= $this->endSection() ?>