<main class="form-signin w-100 m-auto">

  <form id="form" method="post" enctype="multipart/form-data">
    <a class="navbar-brand d-flex justify-content-center" href="sign-in.php">
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

    <div class="alert alert-danger alert-dismissible fade show d-none" id="alert" role="alert" > 
    </div>

    
    <div class="form-floating">
      <input type="text" class="form-control" id="floatinguserName" name="username" required onkeyup=" return inputvalidate(event)" oninput="debounceCheckUserInput(event)" placeholder="User Name"  >
      <label for="floatinguserName">User Name</label>
    </div>
    <div class="form-floating ">
      <input type="email" class="form-control" id="floatingEmail" name="email" onkeyup="return inputvalidate(event)" oninput="debounceCheckUserInput(event)" placeholder="name@example.com" required >
      <label for="floatingEmail">Email address</label>      
    </div>
    <div class="form-floating d-flex justify-content-end">
      <input type="password" class="form-control" id="floatingPassword" name="password" onkeyup=" return inputvalidate(event)" oninput="debounceCheckUserInput(event)"  placeholder="Password" required >
      <label for="floatingPassword">Password</label>
      <button class="btn border-0 z-0 position-absolute d-flex align-self-center" type="button" id="btn-eye"  onclick="passwordVisibility(event)" disabled><i id="bi-eye" class="bi bi-eye-fill d-flex"></i></button>
      <!-- <span class ="input-group-text mb-2"><button><i class="bi bi-eye-fill d-flex"></i></button></span> -->
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2"  id="btn-submit" type="submit">Sign in</button>
    <p>Already have an account? <a class="text-body-primary p-2" type="button" href="login.php">Login</a></p>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>

</main>

<script src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php ($_SERVER['DOCUMENT_ROOT']) ?>/js/public/signin.js"></script>
<!-- <script type="module" src="../js/makeGetRequest.js"></script> -->