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
						<h5>Керування всіма відгуками та коментарами</h5><br>
						<span><b>Відгуки з заходів</b></span><br><br>
						<?php 
						$limit = 2;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  

						$sql = "SELECT * FROM `comments_event` ORDER BY `id` ASC LIMIT $start_from, $limit";  
						$rs_result = mysqli_query($conn,$sql);  
						?>  
						<table class="table table-bordered table-striped">  
							<thead>  
								<tr>  
									<th>№</th>  
									<th>Автор</th> 
									<th>Дата</th>
									<th>Тип юзера</th>
									<th>Коментар</th>
									<th>Операції</th>       
								</tr>  
							</thead>  
							<tbody>  
								<?php  
								while ($row = mysqli_fetch_assoc($rs_result)) {  
									?>  
									<tr>  
										<td><? echo $row["id"]; ?></td> 
										<td><a href="../user/user?id=<? echo $row["id_user"]; ?>"><? echo $row["author"]; ?></a></td> 
										<td><? echo $row["date"]; ?></td>  
										<td><? echo $row["comments_user_type"]; ?></td>
										<td><a href="../pages/big_events?event=<?php echo $row["id_events"]; ?>"><? echo $row["text"]; ?></a></td>       
										<td><a href="" class="btn btn-danger btn-sm">Видалити</a></td>
									</tr>  
									<?php  }  ?>  
							</tbody>  
						</table>
						
						<span><b>Коментарі з блогу</b></span><br><br>
						<?php 
						$limit = 2;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  

						$sql = "SELECT * FROM `comments_blog` ORDER BY `id` ASC LIMIT $start_from, $limit";  
						$rs_result = mysqli_query($conn,$sql);  
						?>  
						<table class="table table-bordered table-striped">  
							<thead>  
								<tr>  
									<th>№</th>  
									<th>Автор</th> 
									<th>Дата</th>
									<th>Тип юзера</th>
									<th>Коментар</th>
									<th>Операції</th>       
								</tr>  
							</thead>  
							<tbody>  
								<?php  
								while ($row = mysqli_fetch_assoc($rs_result)) {  
									?>  
									<tr>  
										<td><? echo $row["id"]; ?></td> 
										<td><a href="../user/user?id=<? echo $row["id_user"]; ?>"><? echo $row["author"]; ?></a></td> 
										<td><? echo $row["date"]; ?></td>  
										<td><? echo $row["comments_user_type"]; ?></td>
										<td><a href="../pages/big_blog?event=<?php echo $row["id_blog"]; ?>"><? echo $row["text"]; ?></a></td>       
										<td><a href="" class="btn btn-danger btn-sm">Видалити</a></td>
									</tr>  
									<?php  }  ?>  
							</tbody>  
						</table>
						<nav> 
							<?php  
							$sql = "SELECT COUNT(id) FROM `comments_event`";  
							$rs_result = mysqli_query($conn,$sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<ul class='pagination justify-content-center pagination-sm'>";  
							for ($i=1; $i<=$total_pages; $i++) {
								if($page == $i) {  
									$pagLink .= "<a class='page-link' href='commentsdashboard?page=".$i."'>".$i."</a>";  
								} else {
									$pagLink .= "<a class='page-link' href='commentsdashboard?page=".$i."'>".$i."</a>"; 
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
