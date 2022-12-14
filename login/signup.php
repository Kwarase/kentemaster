<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/signup.css" rel="stylesheet">
  </head>

<body class="text-center">

<main class="form-signup w-100 m-auto">
    <form method="POST" action="../actions/signup_process.php">
        <img class="mb-4" src="../images/logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
        <div class="form-floating">
            <input type="text" class="form-control" placeholder="First Name" name="firstname" required id="first_name">
            <label for="first_name" class="form-label">First Name</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" placeholder="Middle Name" name="middlename" required id="middle_name">
            <label for="middle_name" class="form-label">Middle Name</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" placeholder="Last Name" name="lastname" required id="last_name">
            <label for="last_name" class="form-label">Last Name</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" placeholder="E-mail" name="customer_email" required id="customer_email">
            <label for="email" class="form-label">E-mail</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" placeholder="Phone Number" name="phone" required id="phone">
            <label for="Phone" class="form-label">Phone</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" placeholder="Enter Password" name="password" required id="regis_password">
            <label for="password" class="form-label">Password</label>
        </div>
    
        <div class="form-floating">
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required id="confirm_password">
            <label for="confirm_password" class="form-label">Confirm Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="signup">Sign Up</button>
        <br>

        <p class="mt-3">Already have an account?<a href="login.php">  Log In</a>

        <p class="mt-3 mb-3 text-muted">&copy; 2022</p>
    </form>
</main>
</body>
</html>

