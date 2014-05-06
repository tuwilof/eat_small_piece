<div class="container">
	<form method='post'  action="../engine/passwordchange.php" class="form-horizontal" role="form">
		<div class="form-group">
			<label for="inputPassword1" class="col-sm-2 control-label">Old password:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" id="inputPassword1" name="oldpass">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword2" class="col-sm-2 control-label">New password:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" id="inputPassword2" name="newpass">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">New password again:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" id="inputPassword3" name="repeatnewpass">
			</div>
	  	</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Send</button>
			</div>
		</div>
	</form>
	<br />
</div>