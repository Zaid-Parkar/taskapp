<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Profile<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
    <div class="form" style="width:30%; margin: 2%;">
<h1>Profile</h1>

<?php if ($user->profile_image): ?>
    
    <img src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="profile image">

    <a href="<?= site_url('/profileimage/delete') ?>">Delete profile image</a>

<?php else: ?>

    <img src="<?= site_url('/images/blank_profile.png') ?>" width="200" height="200" alt="profile image">

<?php endif; ?>

<dl>
    <dt>Name</dt>
    <dd><?= esc($user->name) ?></dd>
    
    <dt>email</dt>
    <dd><?= esc($user->email) ?></dd>
</dl>

<button class="btn btn-primary m-2 text-white"><a class="text-white" style="text-decoration: none;" href="<?= site_url("/profile/edit") ?>">Edit</a></button>

<button class="btn btn-primary m-2"><a  class="text-white" style="text-decoration: none;"href="<?= site_url("/profile/editpassword") ?>">Change password</a></button>

<button class="btn btn-primary m-2"><a  class="text-white" style="text-decoration: none;" href="<?= site_url("/profileimage/edit") ?>">Change profile image</a></button>



    </div>
</section>
<?= $this->endSection() ?>