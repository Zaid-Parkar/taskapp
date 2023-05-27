<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section('content') ?>


<section>
    <div class="form" style="width:30%; margin: 2%;">
    <h1>Login</h1>
<?= form_open("/login/create") ?>

    <div>
        <label for="email">email</label>
        <input type="text" name="email" class="form-control" id="email" value="<?= old('email') ?>">
    </div>
    
    <div>
        <label for="password">Password</label>
        <input type="password"  class="form-control" name="password">
    </div>
    
    <div>
        <label for="remember_me">
            <input type="checkbox"  id="remember_me" name="remember_me"
                <?php if (old('remember_me')): ?>checked<?php endif; ?>> remember me
        </label>
    </div>
    
    <button class="btn btn-primary my-2">Log in</button>

    <a href="<?= site_url("/password/forgot") ?>">Forgot password?</a>

</form>
</div>
</section>
<?= $this->endSection() ?>







