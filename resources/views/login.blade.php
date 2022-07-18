<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="It's just a Magic Login System">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Manual Generator">
    <meta name="default-account" content="coscup2022">
    <meta name="default-password1" content="34250003024812">
    <meta name="default-password2" content="123456789012345678901234567890123456789012345678901234567890123456789012">
    <title>Magic Login System</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    
    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="icon" href="https://coscup.org/2020/images/banner-logo.svg" type="image/svg+xml">
<meta name="theme-color" content="#7952b3">


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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="/login" method="post">
    <img class="mb-4" src="https://coscup.org/2020/images/banner-logo.svg" alt="" width="100" height="75">
    <h1 class="h3 mb-3 fw-normal">Please Sign in</h1>
    <p>請試著登入並拿到想要得到的Token :)</p>
    <p class="h6 mark">Please try to login and retrieve the token :)</p>

    <div class="form-floating">
      <input type="text" class="form-control" id="user" name="user">
      <label for="floatingInput">Account User Name</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–{{ \date('Y') }}</p>
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
  </form>
</main>

  </body>
</html>
