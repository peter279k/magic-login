<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="It's just a Token System">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Manual Generator">
    <title>Token System</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    
    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="icon" href="https://coscup.org/2020/images/banner-logo.svg" type="image/svg+xml">
<meta name="theme-color" content="#7952b3">
  </head>
  <body class="text-center">
    
<main>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">token</th>
      <th scope="col">type</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->token }}</td>
            <td>{{ $user->type }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
    @endforeach
  </tbody>
  </table>
</main>

  </body>
</html>
