<!-- Modal Register-->
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<h3>Реєстрація на сайті</h3><br>
						<form class="FormRegisterModal" method="post" action="../function/register.php">
							<label>Ім'я</label><br>
							<input type="text" name="name_pib" pattern="^[А-Яа-яЁё-Іі-їЇ\s]+$" required placeholder="ваше ім'я"><br>
							<label>Логін</label><br>
							<input type="text" name="username" pattern="^[a-zA-Z]+$ [0-9]{,0}" required placeholder="ваш логін"><br>
							<label>Пошта</label><br>
							<input type="email" name="email" required placeholder="example@gmail.com"><br>
							<label>Телефон</label><br>
							<input type="tel" name="tel_number" pattern="[0-9]{12}" required placeholder="99(999)999-99-99"><br>
							<label>Пароль</label><br>
							<input type="password" name="password_1" required placeholder="пароль №1"><br>
							<label>Повторіть пароль</label><br>
							<input type="password" name="password_2" required placeholder="пароль №2"><br>
							<input type="submit" id="reg_submit_reg" name="register_btn" value="Реєстрація">
						</form>
						<span>Зареєстровані? Перейдіть на <a href="../index">Головну</a> та авторизуйтесь.</span>
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
							<input type="text" name="username" pattern="^[a-zA-Z]+$ [0-9]{,0}" required placeholder="ваш логін"><br>
							<label>Пароль</label><br>
							<input type="password" name="password" required placeholder="ваш пароль"><br>
							<input type="submit" name="login_btn" value="Увійти">
						</form>
						<span>Не зареєстровані? Перейдіть на <a href="../index">Головну</a> та зареєструйтесь.</span>
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
						<h3>Пошук заходів</h3><br>
						<form action="../pages/search" class="FormRegisterModal" method="GET">
							<input type="search" name="search" required placeholder="Що бажаєте знайти?">
							<button type="submit">Шукати</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal edit profile pass-->
<div class="modal fade" id="EditeProfilePass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<form class="FormEditModalPass" method="post" action="../user/editprofile.php">
							<label>Ваш перший пароль</label><br>
							<input type="password" name="password_re" required><br>
							<label>Новий пароль</label><br>
							<input type="password" name="password_1" required><br>
							<label>Повторіть пароль</label><br>
							<input type="password" name="password_2" required><br>
							<input type="submit" id="reg_submit_reg" name="edit_btn" value="Редагувати">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal edit profile-->
<div class="modal fade" id="EditeProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<form class="FormEditModal" method="post" action="../user/editprofile.php">
							<label>Ім'я</label><br>
							<input type="text" name="name_pib" pattern="^[А-Яа-яЁё-Іі-їЇ\s]+$" required placeholder="ваше ім'я"><br>
							<label>Телефон</label><br>
							<input type="tel" name="tel_number_edit" pattern="[0-9]{12}" required placeholder="99(999)999-99-99"><br>
							<input type="submit" id="reg_submit_reg" name="edit_btn_prof" value="Редагувати">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal edit profile photo-->
<div class="modal fade" id="EditeProfilePhoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<form class="FormEditModal" method="post" action="../user/editprofile" enctype="multipart/form-data">
							<label>Зображення</label><br>
							<input type="file" name="uploadfile" multiple accept="image/*,image/jpeg"><br>
							<input type="submit" id="reg_submit_reg" value="Змінити">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>