<?php
include '../function/configdb.php';
//Checking User Logged or Not
if(empty($_SESSION['user'])){
	header('location:../pages/404');
}
//Restrict User to Access Admin.php page
if($_SESSION['user']['user_type']=='Юзер'){
	header('location:../pages/404');
}
?>
<?php include("../include/up_style.php") ?>
<body>	
	<div class="admin_welcome">
		<h4>Ласкаво просимо, <?php echo $_SESSION['user']['username'];?>! <br><span><?php echo $_SESSION['user']['user_type'];?></span></h4>
	</div>
	<div class="admin_menu">
		<ul>
			<li>
				<a class="btn btn-sm btn-outline-secondary" href="../index">На головну</a>
				<a class="btn btn-sm btn-outline-secondary" href="admin">Пенель заходів</a>
				<a class="btn btn-sm btn-outline-secondary" href="blogdashboard">Панель статей</a>
				<a class="btn btn-sm btn-outline-secondary" href="locdashboard">Панель місць</a>
				<a class="btn btn-sm btn-outline-secondary" href="userdashboard">Панель юзерів</a>
				<a class="btn btn-sm btn-outline-secondary" href="commentsdashboard">Панель коментарів та відгуків</a>
				<a class="btn btn-sm btn-outline-secondary" href="../user/user?id=<?php echo $_SESSION['user']['id']; ?>">Мій профіль</a>
			</li>
		</ul>
	</div>
	<div class="main_content_news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="admin_content">
						<h5>Керування всіма місцями</h5><br>
						<?php 
						$limit = 2;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  

						$sql = "SELECT * FROM `location` ORDER BY `id` ASC LIMIT $start_from, $limit";  
						$rs_result = mysqli_query($conn,$sql);  
						?>  
						<table class="table table-bordered table-striped">  
							<thead>  
								<tr>  
									<th>№</th>  
									<th>Назва</th> 
									<th>Адреса</th>
									<th>Посилання</th>
									<th colspan="3">Операції</th>       
								</tr>  
							</thead>  
							<tbody>  
								<?php  
								while ($row = mysqli_fetch_assoc($rs_result)) {  
									?>  
									<tr>  
										<td><? echo $row["id"]; ?></td> 
										<td><a href="../pages/singl_location?id=<?php echo $row['id']; ?>"><? echo $row["title_location"]; ?></a></td>    
										<td><? echo $row["adress"]; ?></td>  
										<td><? echo $row["loc_url"]; ?></td>     
										<td><a href="" class="btn btn-success btn-sm">Додати</a></td>
										<td><a href="" class="btn btn-primary btn-sm">Змінити</a></td>
										<td><a href="" class="btn btn-danger btn-sm">Видалити</a></td>
									</tr>  
									<?php  }  ?>  
							</tbody>  
						</table>
						<nav> 
							<?php  
							$sql = "SELECT COUNT(id) FROM `location`";  
							$rs_result = mysqli_query($conn,$sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<ul class='pagination justify-content-center pagination-sm'>";  
							for ($i=1; $i<=$total_pages; $i++) {
								if($page == $i) {  
									$pagLink .= "<a class='page-link' href='locdashboard?page=".$i."'>".$i."</a>";  
								} else {
									$pagLink .= "<a class='page-link' href='locdashboard?page=".$i."'>".$i."</a>"; 
								}
							};  
							echo $pagLink . "</ul>";  
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<?php include("../include/bot_script.php") ?>
