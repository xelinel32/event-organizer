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
	<?php require_once('admin_include/admin_header.php'); ?>
	<div class="main_content_news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="admin_content">
						<h5>Керування всіма юзерами</h5><br>
						<?php 
						$limit = 2;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  

						$sql = "SELECT * FROM `multi_login` ORDER BY `id` ASC LIMIT $start_from, $limit";  
						$rs_result = mysqli_query($conn,$sql);  
						?>  
						<div class="table-responsive">
						<table class="table table-bordered table-striped">  
							<thead>  
								<tr>  
									<th>№</th>  
									<th>Логін</th> 
									<th>Email</th>
									<th>Тип юзера</th>
									<th>Ім'я</th> 
									<th>Телефон</th>
									<th colspan="2">Операції</th>       
								</tr>  
							</thead>  
							<tbody>  
								<?php  
								while ($row = mysqli_fetch_assoc($rs_result)) {  
									?>  
									<tr>  
										<td><? echo $row["id"]; ?></td> 
										<td><a href="../user/user?id=<?php echo $row['id'] ?>"><? echo $row["username"]; ?></a></td>    
										<td><? echo $row["email"]; ?></td>  
										<td><? echo $row["user_type"]; ?></td>   
										<td><? echo $row["pib"]; ?></td>  
										<td><? echo $row["phone_number"]; ?></td> 
										<?php if($_SESSION['user']['username'] == $row['username']){ ?>
										<?php } else { ?>
										<td><a href="" class="btn btn-success btn-sm">Дод.</a></td>
										<td><a href="" class="btn btn-danger btn-sm">Вид.</a></td>
										<?php } ?> 
									</tr>  
									<?php  }  ?>  
							</tbody>  
						</table>
					</div>
						<nav> 
							<?php  
							$sql = "SELECT COUNT(id) FROM `multi_login`";  
							$rs_result = mysqli_query($conn,$sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<ul class='pagination justify-content-center pagination-sm'>";  
							for ($i=1; $i<=$total_pages; $i++) {
								if($page == $i) {  
									$pagLink .= "<a class='page-link' href='userdashboard?page=".$i."'>".$i."</a>";  
								} else {
									$pagLink .= "<a class='page-link' href='userdashboard?page=".$i."'>".$i."</a>"; 
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
