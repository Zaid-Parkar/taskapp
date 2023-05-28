<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete user<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section >  <div class="form">
    
<h1>Delete user</h1>

<p>Are you sure?</p>

<?= form_open("/admin/users/delete/" . $user->id) ?>

    <button class="btn btn-primary">Yes</button>
    <button class="btn btn-primary">  <a class="mbutton"href="<?= site_url('/admin/users/show/' . $user->id) ?>">Cancel</a></button>
    
</form></div>
</section>
<?= $this->endSection() ?>