<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Signup<?= $this->endSection() ?>

<?= $this->section('content') ?>



<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>


    <!-- <div  class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text"class="form-control" name="name" id="name" value="<= old('name') ?>">
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="email" id="email" value="<= old('email') ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="submit" class="btn btn-primary">Cancel</button> -->









<section>
    <div class="form" style="width:30%; margin: 2%;">
    <h1>Signup</h1>
<?= form_open("/signup/create") ?>

    <div>
        <label for="name">Name</label>
        <input type="text"  class="form-control"  name="name" id="name" value="<?= old('name') ?>">
    </div>
    
    <div>
        <label for="email">email</label>
        <input type="text"  class="form-control" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <div>
        <label for="password">Password</label>
        <input type="password"  class="form-control" name="password">
    </div>
    
    <div>
        <label for="password_confirmation">Repeat password</label>
        <input type="password"  class="form-control" name="password_confirmation">
    </div>
    
    <button class="btn btn-primary my-2">Sign up</button>
    <a href="<?= site_url("/") ?>">Cancel</a>

    </form>
    </div>
</section>

<?= $this->endSection() ?>