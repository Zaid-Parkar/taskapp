<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit profile<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
    <div class="form">
    <h1>Edit profile</h1>

<p>Please enter your password to continue</p>

<?= form_open("/profile/processauthenticate") ?>

    <div>
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password">
    </div>
    
    <button class="btn btn-primary m-2">Send</button>
    <button class="btn btn-primary m-2"><a class="mbutton" href="<?= site_url('/profile/show') ?>">Cancel</a></button>

</form> 


    </div>
</section>


<?= $this->endSection() ?>