<?php
include 'configdb.php';
	if(isset($_GET['event'])){
		$sqlquery = "SELECT * FROM `comments_event` WHERE `id_events` = ".$_GET['event'].""; 
}
	$sql = mysqli_query($conn,$sqlquery) or die(mysqli_error());
	while($row = mysqli_fetch_array($sql)){
?>
		<i class="fa fa-user-o" aria-hidden="true"></i> Автор - <b><?php echo $row['author']; ?> 
	<?php if($row['comments_user_type'] =='Юзер'){ ?>
		(<i style = "color: blue;"><?php echo $row['comments_user_type']; ?></i>)</b> 
	<?php } else { ?>
		(<i style = "color: red"><?php echo $row['comments_user_type']; ?></i>)</b>
	<?php } ?>
		| Дата - <b><?php echo $row['date']; ?></b></br>
		</br><p>Залишив(ла) відгук: <i><?php echo $row['text']; ?></i></p>
<div style="clear: both;"><br></div>
<?php } ?>