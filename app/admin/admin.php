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
<hr class="hrline">	
<body>
	<?php require_once('admin_include/admin_header.php'); ?>
	<div class="main_content_news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="admin_content">
						<h5>Керування всіма заходами</h5><br>
						<?php 
						$limit = 2;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  

						$sql = "SELECT * FROM `events` ORDER BY `add_event` ASC LIMIT $start_from, $limit";  
						$rs_result = mysqli_query($conn,$sql);  
						?>  
						<div class="table-responsive-md">
						<table class="table table-bordered table-striped">  
							<thead>  
								<tr>  
									<th>№</th>  
									<th>Назва</th> 
									<th>Початок</th>
									<th>Кінець</th>
									<th>Додано</th>
									<th>Ім'я юзера</th> 
									<th colspan="3">Операції</th>       
								</tr>  
							</thead>  
							<tbody>  
								<?php  
								while ($row = mysqli_fetch_assoc($rs_result)) {  
									?>  
									<tr>  
										<td><? echo $row["id"]; ?></td> 
										<td><a href="../pages/big_events?event=<?php echo $row['id'] ?>"><? echo $row["title"]; ?></a></td>    
										<td><? echo $row["start_event"]; ?></td>  
										<td><? echo $row["end_event"]; ?></td>  
										<td><? echo $row["add_event"]; ?></td>  
										<td><a href="../user/user?id=<?php echo $row['id_user'] ?>"><? echo $row["post_event"]; ?></a></td>  
										<td><a href="../user/neweventuser" class="btn btn-success btn-sm">Дод.</a></td>
										<td><a href="../user/editeventuser?user_event_id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Змі.</a></td>
										<td><a href="../user/editprofile?del=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Вид.</a></td>  
									</tr>  
									<?php  
								};  
								?>  
							</tbody>  
						</table>
					</div>
						<nav aria-label="Page navigation example"> 
							<?php  
							$sql = "SELECT COUNT(id) FROM `events`";  
							$rs_result = mysqli_query($conn,$sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<ul class='pagination justify-content-center pagination-sm'>"; 
							if($page != 1){
								$pagLink .= "<li class='page-item'><a class='page-link' href='admin?page=1'>Перша</a></li>";  
							}  
							for ($i=1; $i<=$total_pages; $i++) {
								if($page == $i) {  
									$pagLink .= "<li class='page-item'><a class='page-link' href='admin?page=".$i."'>".$i."</a></li>";  
								} else {
									$pagLink .= "<li class='page-item'><a class='page-link' href='admin?page=".$i."'>".$i."</a></li>"; 
								}
							}; 
							if($page != $total_pages){
								$pagLink .= "<li class='page-item'><a class='page-link' href='admin?page=".$total_pages."'>Остання</a></li>";  
							} 
							echo $pagLink . "</ul>";  
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php include("../include/bot_script.php") ?>
