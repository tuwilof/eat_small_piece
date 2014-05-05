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
  <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Eat small piece</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/index.php?page=pies">Task list</a></li>
            <li><a href="/index.php?page=getsubtask">Get subtasks</a></li>
            <li><a href="/index.php?page=performed">Performed</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/index.php?page=settings">Settings</a></li>
            <li><a href="/engine/exit.php">Exit</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <br /><br /><br /><br />