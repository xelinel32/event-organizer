<!-- Modal Register-->
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modalbg">
      <div class="modal-body">
	  	<div class="RegisterModal">
	  		<h3>Реєстрація на сайті</h3><br>
		<form class="FormRegisterModal" method="post" action="../function/register.php">
			<label>Повне ім'я</label><br>
			<input type="text" name="name_pib" pattern="^[А-Яа-яЁё-Іі-їЇ\s]+$" required placeholder="піб"><br>
			<label>Логін</label><br>
			<input type="text" name="username" pattern="^[a-zA-Z]+$ [0-9]{,0}" required placeholder="login"><br>
			<label>Пошта</label><br>
			<input type="email" name="email" required placeholder="example@gmail.com"><br>
			<label>Телефон</label><br>
			<input type="tel" name="tel_number" pattern="[0-9]{12,17}" required placeholder="+99(999)999-99-99"><br>
			<label>Пароль</label><br>
			<input type="password" name="password_1" required placeholder="password one"><br>
			<label>Повторіть пароль</label><br>
			<input type="password" name="password_2" required placeholder="password two"><br>
			<input type="submit" id="reg_submit_reg" name="register_btn" value="Реєстрація">
		</form>
		<span>Зареєстровані? Перейдіть на <a href="../index.php">Головну</a> та авторизуйтесь.</span>
		</div>
		</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Customer-->
<div class="modal fade" id="CustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modalbg">
      <div class="modal-body">
	  	<div class="RegisterModal">
				<h3>Авторизація на сайті</h3><br>
		<form class="FormRegisterModal" method="post" action="../function/login.php">
			<label>Логін</label><br>
			<input type="text" name="username" pattern="^[a-zA-Z]+$ [0-9]{,0}" required placeholder="login"><br>
			<label>Пароль</label><br>
			<input type="password" name="password" required placeholder="password"><br>
			<input type="submit" name="login_btn" value="Увійти">
		</form>
		<span>Не зареєстровані? Перейдіть на <a href="../index.php">Головну</a> та зареєструйтесь.</span>
		</div>
		</div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Search-->
<div class="modal fade" id="SearchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modalbg">
      <div class="modal-body">
	  	<div class="RegisterModal">
				<h3>Пошук по сайту</h3><br>
		<form action="" class="FormRegisterModal" method="post">
				<input type="search" name="search" required placeholder="Що бажаэте знайти?">
				<button type="submit">Шукати</button>
		</form>
		</div>
		</div>
      </div>
    </div>
  </div>
</div>
