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
						<h5>Керування всіма статтями</h5><br>
						<?php 
						$limit = 10;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  

						$sql = "SELECT * FROM `blog` ORDER BY `date_post` ASC LIMIT $start_from, $limit";  
						$rs_result = mysqli_query($conn,$sql);  
						?>
						<a href="BlogModal" class="btn btn-success btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Додати статтю</a><br><br>  
						<div class="table-responsive-md">
						<table class="table table-bordered table-striped">  
							<thead>  
								<tr>  
									<th>№</th>  
									<th>Назва</th> 
									<th>Додано</th>
									<th>Юзер</th>
									<th>Додано</th>
									<th colspan="2">Операції</th>       
								</tr>  
							</thead>  
							<tbody>  
								<?php  
								while ($row = mysqli_fetch_assoc($rs_result)) {  
									?>  
									<tr>  
										<td><? echo $row["id"]; ?></td> 
										<td><a href="../pages/big_events?event=<?php echo $row['id'] ?>"><? echo $row["title_post"]; ?></a></td>    
										<td><? echo $row["date_post"]; ?></td>   
										<td><a href="../user/user?id=<?php echo $row['id_user'] ?>"><? echo $row["user_post"]; ?></a></td>
										<td><a href="../user/editeventuser?user_event_id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Змінити</a></td>
										<td><a href="module/deletedblogbage?del_blog=<?php echo $row['id']; ?>" OnClick="return confirm('Ви хочете видалити цю статтю?')" class="btn btn-danger btn-sm"><i class="fa fa-minus-circle" aria-hidden="true"></i> Видалити</a></td>  
									</tr>  
									<?php  
								};  
								?>  
							</tbody>  
						</table>
					</div>
						<nav aria-label="Page navigation example"> 
							<?php  
							$sql = "SELECT COUNT(id) FROM `blog`";  
							$rs_result = mysqli_query($conn,$sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<ul class='pagination justify-content-center pagination-sm'>"; 
							if($page != 1){
								$pagLink .= "<li class='page-item'><a class='page-link' href='blogdashboard?page=1'>Перша</a></li>";  
							}  
							for ($i=1; $i<=$total_pages; $i++) {
								if($page == $i) {  
									$pagLink .= "<li class='page-item'><a class='page-link' href='blogdashboard?page=".$i."'>".$i."</a></li>";  
								} else {
									$pagLink .= "<li class='page-item'><a class='page-link' href='blogdashboard?page=".$i."'>".$i."</a></li>"; 
								}
							}; 
							if($page != $total_pages){
								$pagLink .= "<li class='page-item'><a class='page-link' href='blogdashboard?page=".$total_pages."'>Остання</a></li>";  
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
</html>
<?php include("../include/bot_script.php") ?>
