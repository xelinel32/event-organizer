<!-- Modal Register-->
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modalbg">
      <div class="modal-body">
	  	<div class="RegisterModal">
	  		<h3>Реєстрація на сайті</h3><br>
		<form class="FormRegisterModal" method="post">
			<label>Ім'я:</label><br>
			<p>*букви лат.,укр.,рус.,алфавітів</p><br>
			<input type="text" name="name" pattern="[A-Za-zА-Яа-яЁё]{2,}" id="reg_name" required placeholder="ім'я"><br>
			<label>Логін:</label><br>
			<p>*букви латинського[A-Za-z]</p><br>
			<input type="text" name="username" pattern="[A-Za-z]{2,}" id="reg_username" required placeholder="username"><br>
			<label>Пошта:</label><br>
			<input type="email" name="email" id="reg_email" required placeholder="example@gmail.com"><br>
			<label>Дата народження:</label><br>
			<input type="date" name="date" id="reg_date" required><br>
			<label>Місто:</label><br>
			<input type="text" name="city" id="reg_city" required placeholder="місто проживання"><br>
			<label>Адреса:</label><br>
			<input type="text" name="address" id="reg_address" required placeholder="адреса"><br>
			<label>Номер телефону:</label><br>
			<input type="tel" name="number" id="reg_number" minlength="9" maxlength="13" required placeholder="+99(999)999-99-99"><br>
			<label>Пароль:</label><br>
			<p>*мін. 4 символи, макс. 30</p><br>
			<input type="password" name="password" pattern="[0-30]{4,}" id="reg_password" required placeholder="password"><br>
			<input type="submit" name="submit" id="reg_submit_reg" value="Реєстрація">
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
		<form class="FormRegisterModal" method="post">
			<label>Логін:</label><br>
			<p>*Тільки букви латинського алфавіту [A-Za-z]</p><br>
			<input type="text" name="username" pattern="[A-Za-z]{2,}" id="reg_username" required placeholder="username"><br>
			<label>Пароль:</label><br>
			<p>*мін. 4 символи, макс. 30</p><br>
			<input type="password" name="password" pattern="[0-30]{4,}" id="reg_password" required placeholder="password"><br>
			<input type="submit" name="submit" id="reg_submit" value="Увійти">
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
				<p>*букви латинського,руського,українського алфавітів [A-Za-zА-Яа-яЁё]</p><br>
		<form action="../app/pages/search" class="FormRegisterModal" method="post">
				<input type="search" name="search" id="search_inp" pattern="[A-Za-zА-Яа-яЁё]{2,}" required placeholder="Що бажаэте знайти?">
				<button type="submit">Шукати</button>
		</form>
		</div>
		</div>
      </div>
    </div>
  </div>
</div>
