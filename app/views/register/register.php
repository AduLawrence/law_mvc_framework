<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
  <div class="col-md-6 offset-md-3 card card-body bg-light">
    <form class="form" action="<?= PROOT; ?>register/register" method="post">

      <h3 class="text-center"> Register</h3><hr>
      <div class="bg-danger" style="color: #fff;">
        <?= $this->displayErrors ?>
      </div>

      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" class="form-control" value="<?= $this->post['fname']?>">
      </div>
      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" class="form-control" value="<?= $this->post['lname']?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" value="<?= $this->post['email']?>">
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" value="<?= $this->post['username']?>">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" value="<?= $this->post['password']?>">
      </div>
      <div class="form-group">
        <label for="confirm">Confirm Password</label>
        <input type="password" name="confirm" id="confirm" class="form-control" value="<?= $this->post['confirm']?>">
      </div>
      <br>
      <div class="form-group">
        <input type="submit" name="" value="Register" class="btn btn-large btn-primary">
      </div>
      <div class="text-right">
        <a href="<?= PROOT ?>register/login" class="text-primary">Login</a>
      </div>

    </form>
  </div>

  <?php $this->end(); ?>
