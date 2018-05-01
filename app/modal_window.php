<!-- Modal Register-->
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
	  	<div class="RegisterModal">
	  		<h3>Реєстрація</h3><br>
		<form class="FormRegisterModal" method="post">
			<label>Ім'я:</label><br>
			<input type="text" name="name" id="reg_name" placeholder="firstname"><br>
			<label>Логін:</label><br>
			<input type="text" name="username" id="reg_username" placeholder="username"><br>
			<label>Пошта:</label><br>
			<input type="email" name="email" id="reg_email" placeholder="email"><br>
			<label>Пароль:</label><br>
			<input type="password" name="password" id="reg_password" placeholder="password"><br>
			<input type="submit" name="submit" id="reg_submit" value="Реєстр">
		</form>
		<span>Зареєстровані? Перейдіть на <a href="../index.php">Головну</a> та авторизуйтесь.</span>
		</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Customer-->
<div class="modal fade" id="CustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
	  	<div class="RegisterModal">
	  		<h3>Простий юзер</h3><br>
		<form class="FormRegisterModal" method="post">
			<label>Логін:</label><br>
			<input type="text" name="username" id="reg_username" placeholder="username"><br>
			<label>Пароль:</label><br>
			<input type="password" name="password" id="reg_password" placeholder="password"><br>
			<input type="submit" name="submit" id="reg_submit" value="Увійти">
		</form>
		<span>Не зареєстровані? Перейдіть на <a href="../index.php">Головну</a> та зареєструйтесь.</span>
		</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Search-->
<div class="modal fade" id="SearchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
	  	<div class="RegisterModal">
	  		<h3>Пошук по сайту</h3><br>
		<form class="FormRegisterModal" method="post">
				<input type="search" name="search" id="search_inp" placeholder="Що бажаэте знайти?">
				<button type="submit">Шукати</button>
		</form>
		</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Admin-->
<div class="modal fade" id="AdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
	  	<div class="RegisterModal">
	  		<h3>Адміністрація</h3><br>
		<form class="FormRegisterModal" method="post">
			<label>Логін:</label><br>
			<input type="text" name="username" id="reg_username" placeholder="username"><br>
			<label>Пароль:</label><br>
			<input type="password" name="password" id="reg_password" placeholder="password"><br>
			<input type="submit" name="submit" id="reg_submit" value="Увійти">
		</form>
		</div>
      </div>
    </div>
  </div>
</div>