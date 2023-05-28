<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>User<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section >  <div class="form">
<h1>User</h1>

<button class="btn btn-primary">  <a class="mbutton"  href="<?= site_url("/admin/users") ?>">&laquo; back to index</a></button>

<dl>
    <dt>Name</dt>
    <dd><?= esc($user->name) ?></dd>

    <dt>email</dt>
    <dd><?= esc($user->email) ?></dd>
    
    <dt>Administrator</dt>
    <dd><?= $user->is_admin ? 'yes' : 'no' ?></dd>
    
    <dt>Created at</dt>
    <dd><?= $user->created_at ?></dd>
    
    <dt>Updated at</dt>
    <dd><?= $user->updated_at ?></dd>
</dl>

<button class="btn btn-primary">  <a class="mbutton"  href="<?= site_url('/admin/users/edit/' . $user->id) ?>">Edit</a></button>

<?php if ($user->id != current_user()->id): ?>
    
    <button class="btn btn-primary">  <a class="mbutton"  href="<?= site_url('/admin/users/delete/' . $user->id) ?>">Delete</a></button>
    
<?php endif; ?></div>
</section>
<?= $this->endSection() ?>





