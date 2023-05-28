<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit profile<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
    <div class="form">
    <h1>Edit profile</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/profile/update") ?>

    <div>
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
    </div>

    <div>
        <label for="email">email</label>
        <input class="form-control" type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
    </div>    
    
    <button class="btn btn-primary">Save</button>
    <button class="btn btn-primary m-2"><a class="mbutton" href="<?= site_url("/profile/show") ?>">Cancel</a>

</form>
    </div>
</section>


<?= $this->endSection() ?>