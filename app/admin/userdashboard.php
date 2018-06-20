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
<hr class="hrline">	
	<?php require_once('admin_include/admin_header.php'); ?>
	<div class="main_content_news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="admin_content">
						<h5>Керування зареєстрованими користувачами</h5><br>
						<?php 
						$limit = 5;  
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
									<th colspan="1">Операції</th>       
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
										<td><a href="module/deleteduser?del=<?php echo $row['id']; ?>" OnClick="return confirm('Ви хочете видалити цього користувача?')" class="btn btn-danger btn-sm"><i class="fa fa-minus-circle" aria-hidden="true"></i> Видалити</a></td>  
										<?php } ?> 
									</tr>  
									<?php  }  ?>  
							</tbody>  
						</table>
					</div>
					<nav aria-label="Page navigation example"> 
							<?php  
							$sql = "SELECT COUNT(id) FROM `location`";  
							$rs_result = mysqli_query($conn,$sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<ul class='pagination justify-content-center pagination-sm'>"; 
							if($page != 1){
								$pagLink .= "<li class='page-item'><a class='page-link' href='userdashboard?page=1'>Перша</a></li>";  
							}  
							for ($i=1; $i<=$total_pages; $i++) {
								if($page == $i) {  
									$pagLink .= "<li class='page-item'><a class='page-link' href='userdashboard?page=".$i."'>".$i."</a></li>";  
								} else {
									$pagLink .= "<li class='page-item'><a class='page-link' href='userdashboard?page=".$i."'>".$i."</a></li>"; 
								}
							}; 
							if($page != $total_pages){
								$pagLink .= "<li class='page-item'><a class='page-link' href='userdashboard?page=".$total_pages."'>Остання</a></li>";  
							} 
							echo $pagLink . "</ul>";  
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="hrlinebot">	
</body>
<?php include("../include/bot_script.php") ?>
