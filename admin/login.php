<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4>Logar como Admin</h4>
			<p class="message"></p>
			<form id="admin-login-form">
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">Seu email nao sera divulgado</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Senha</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_login" value="1">
			  <button type="button" class="btn btn-primary login-btn">Enviar</button>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
