<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit password<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
    <div class="form">
    <h1>Edit password</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/profile/updatepassword") ?>

    <div>
        <label for="current_password">Current password</label>
        <input class="form-control" type="password" name="current_password">
    </div>
    
    <div>
        <label for="password">New password</label>
        <input class="form-control" type="password" name="password">
    </div>
    
    <div>
        <label for="password_confirmation">Repeat new password</label>
        <input class="form-control" type="password" name="password_confirmation">
    </div>
    
    <button class="btn btn-primary m-2">Save</button>
    <button class="btn btn-primary m-2"><a class="mbutton" href="<?= site_url("/profile/show") ?>">Cancel</a>

</form>

    </div>
</section>

<?= $this->endSection() ?>








