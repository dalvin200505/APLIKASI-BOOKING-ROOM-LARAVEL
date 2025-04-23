
<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.118.2">
        <link rel="shortcut icon" href="<?php echo e(asset('assets/img/logo.png')); ?>" type="image/x-icon">
        <title>SMK FARMAKO | Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <style>
           .btn-color{
  background-color: #0e1c36;
  color: #fff;

}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}


.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
        </style>
    </head>
    <body class="d-flex align-items-center py-4 bg-body-tertiary">

        <main class="form-signin w-100 m-auto">
        <form action="<?php echo e(route('cekLogin')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
<br>
            <center><h1 class="h3 mb-3 fw-normal">Login | <a href="/" class="btn btn-warning badge-rounded">Back</a></h1></center>
            <div class="container">
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <div class="card my-5">

                      <form class="card-body cardbody-color p-lg-5">

                        <div class="text-center">
                          <img src="https://www.e-ujian.com/smk_farmako_Medika123/logo" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                            width="200px" alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
                            <label for="floatingInput"></label>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword"></label>
                        </div>
                        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
                          Registered? <a href="#" class="text-dark fw-bold"> Create an
                            Account contact Admin</a>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </body>
</html>


<?php /**PATH C:\radar-bogor-booking\resources\views/login.blade.php ENDPATH**/ ?>