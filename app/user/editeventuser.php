<?php include("../pages/pages_include/up_style.php") ?>
<?php 
	if($_GET['id'] == $_SESSION['user']['id']){
		echo "<script>location='../pages/404'</script>";
	}
?>
<body>
	<header class="top_header">
		<?php include("../include/header.php") ?>
	</header>
	<div class="myinfobars">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="box_news">
						<div class="newevent">
							<h3>Форма редагування заходу</h3>
							<div class="formnewevent">
								<form action="editeventprocess.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
								<label>Назва</label><br>
								<input class="form-control" type="text" name="name_event" required><br>
						<label for="exampleFormControlSelect1">Категорія</label><br>
						<select class="form-control" id="exampleFormControlSelect1" name="cat_event">
						<?php $query = "SELECT `id`,`category` FROM `category_events`"; 
						$categories =  mysqli_query($conn,$query);
						?>	
						<option></option>
						<?php while($row = mysqli_fetch_assoc($categories)){ ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['category']?></option>
                    	<?php } ?>
                      	</select></br>
						<label for="exampleFormControlSelect1">Місце проходження</label><br>
						<select class="form-control" id="exampleFormControlSelect1" name="location_event">
						<?php $query = "SELECT `id`,`title_location` FROM `location`"; 
						$locations =  mysqli_query($conn,$query);
						?>	
						<option></option> 
						<?php while($row = mysqli_fetch_assoc($locations)){ ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['title_location']?></option>
                    	<?php } ?>
                      </select></br>
								<label for="exampleFormControlFile1">Зображення</label><br>
								<input class="form-control-file" id="exampleFormControlFile1" required type="file" type="file" name="img_event" multiple accept="image/*,image/jpeg"><br>
								<label>Початок заходу</label>
								<input class="form-control" value="<?php date("Y-m-d"); ?>" id="example-date-input" required type="date" name="start_event"><br>
								<label>Кінець заходу</label>
								<br><input value="<?php date("Y-m-d"); ?>" id="example-date-input" class="form-control" required type="date" name="end_event"><br>
								<br><label for="exampleFormControlTextarea1">Короткий опис</label><br>
								<textarea required name="preview_event" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea><br>
								<label>Повний опис</label><br>
								<textarea required class="form-control" id="exampleFormControlTextarea1" name="full_event" cols="80" rows="10"></textarea><br>
								<input class="btn btn-light" type="submit" value="Редагувати" name="btn_edit_event">
								<input type="text" name="user_event_id_post" hidden value="<?php echo $_GET['user_event_id'] ?>">
								</div>
								</form>
								<div style="clear: both;border-top: 1px solid black"><br></div>
								<div class="infoevents">
									<h5>Правила оформлення заходу</h5>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar -->
				<?php include("../include/sidebar.php"); ?>
				<!-- Sidebar -->
			</div>
		</div>
	</div>	
	<footer>
		<?php include("../include/footer.php") ?>
	</footer>
<div class="up_button">
  <img src="../img/up.png">
</div>		
	<?php include("../include/bot_script.php") ?>
</body>
<?php include("../modal_window.php") ?>
</html>