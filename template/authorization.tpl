<?php require_once("template/header.tpl"); ?>	
    <div class="container" style="width: 300px;">
      <form class="form-signin" role="form" action="/engine/action.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="login" class="form-control" placeholder="username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="password" required><br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
<?php require_once("template/footer.tpl"); ?>