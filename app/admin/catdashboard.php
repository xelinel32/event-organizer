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
						<h5>Керування всіма категоріями виховної роботи</h5><br>
						<?php 
						$limit = 3;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  

						$sql = "SELECT * FROM `category_events` ORDER BY `id` ASC LIMIT $start_from, $limit";  
						$rs_result = mysqli_query($conn,$sql);  
						?>
						<a href="modal" data-toggle="modal" data-target="#CatAdd" class="btn btn-success btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Додати категорію</a><br><br>  
						<div class="table-responsive-md">
						<table class="table table-bordered table-striped">  
							<thead>  
								<tr>  
									<th>№</th>  
									<th>Назва</th>
									<th colspan="2">Операції</th>       
								</tr>  
							</thead>  
							<tbody>  
								<?php  
								while ($row = mysqli_fetch_assoc($rs_result)) {  
									?>  
									<tr>  
										<td><? echo $row["id"]; ?></td> 
										<td><? echo $row["category"]; ?></td>
										<td><a href="module/catdeleted.php?del=<?php echo $row['id']; ?>"  OnClick="return confirm('Ви хочете видалити цю категорію?')" class="btn btn-danger btn-sm"><i class="fa fa-minus-circle" aria-hidden="true"></i> Видалити</a></td>  
									</tr>  
									<?php  
								};  
								?>  
							</tbody>  
						</table>
					</div>
						<nav aria-label="Page navigation example"> 
							<?php  
							$sql = "SELECT COUNT(id) FROM `category_events`";  
							$rs_result = mysqli_query($conn,$sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<ul class='pagination justify-content-center pagination-sm'>"; 
							if($page != 1){
								$pagLink .= "<li class='page-item'><a class='page-link' href='catdashboard?page=1'>Перша</a></li>";  
							}  
							for ($i=1; $i<=$total_pages; $i++) {
								if($page == $i) {  
									$pagLink .= "<li class='page-item'><a class='page-link' href='catdashboard?page=".$i."'>".$i."</a></li>";  
								} else {
									$pagLink .= "<li class='page-item'><a class='page-link' href='catdashboard?page=".$i."'>".$i."</a></li>"; 
								}
							}; 
							if($page != $total_pages){
								$pagLink .= "<li class='page-item'><a class='page-link' href='catdashboard?page=".$total_pages."'>Остання</a></li>";  
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
<div class="modal fade" id="CatAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-body">
					<form method="post" action="module/catadding.php">
						<label for="message-text" class="col-form-label">Назва категорії:</label>
						<input type="text" name="cat_name" class="form-control" id="recipient-name"><br>
						<input type="submit" name="cat_btn" class="btn btn-primary btn-sm" value="Додати"><br><br>
					</form>
				</div>
		</div>
	</div>
</div>
