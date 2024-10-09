<main class="form-signin w-100 m-auto">
  <form>
    <a class="navbar-brand d-flex justify-content-center" >
      <?php if ($_GET["type"] == "seller") {
      ?>
        <h1>Seller Login<img src="../logo/supermarket.svg" width="60px"
            height="60px"></h1>
   
  <?php
      } else {
  ?>
    <h1>User Login<img src="../logo/supermarket.svg" width="60px"
        height="60px"></h1></a>
  <?php
      }
  ?>
   </a>
  <div>
    <ul class="nav nav-pills col">
      <li class="nav-item text-center col-6">
        <a class="nav-link <?php echo $_GET['type'] != 'seller' ? "active" : "" ?> " aria-current="page" href="/login">User</a>
      </li>
      <li class="nav-item text-center col-6">
        <a class="nav-link <?php echo $_GET['type'] == 'seller' ? "active" : "" ?>" href="/login/seller">Seller</a>
      </li>
    </ul>
  </div>

  <div class="form-floating">
    <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
    <label for="floatingEmail">Email address</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
  </div>

  <div class="form-check text-start my-3">
    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Remember me
    </label>
  </div>
  <button class="btn btn-primary w-100 py-2" type="submit">login</button>
  <p>Don`t have a account? <a class="text-body-primary p-2" type="button" href="/signin.php">Create Account</a></p>

  <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>
<script src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/assets/dist/js/bootstrap.bundle.min.js"></script>