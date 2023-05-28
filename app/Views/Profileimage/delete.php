<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete profile image<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
    <div class="form">
    <h1>Delete profile image</h1>

<p>Are you sure?</p>

<?= form_open("/profileimage/delete") ?>

    <button  class="btn btn-primary">Yes</button>
    <button class="btn btn-primary m-2"><a class="mbutton"  href="<?= site_url("/profile/show") ?>">Cancel</a></button>
    
</form>

    </div>
</section>

<?= $this->endSection() ?>