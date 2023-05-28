<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit profile image<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
    <div class="form">
    <h1>Edit profile image</h1>

<?= form_open_multipart("/profileimage/update") ?>

    <div>
        <label for="image">File</label>
        <input type="file" name="image" id="image" />
    </div>
    
    <button class="btn btn-primary">Upload</button>
    <button class="btn btn-primary m-2"><a class="mbutton"  href="<?= site_url("/profile/show") ?>">Cancel</a></button>
    
</form>
    </div>
</section>


<?= $this->endSection() ?>