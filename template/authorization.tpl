<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titlePage; ?></title>

    <!-- Bootstrap -->
    <link href="../template/css/bootstrap.min.css" rel="stylesheet">
    <link href="../template/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container" style="width: 300px;">
      <form class="form-signin" role="form" action="/engine/action.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="login" class="form-control" placeholder="username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="password" required><br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>