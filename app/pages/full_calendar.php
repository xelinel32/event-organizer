<?php include("pages_include/up_style.php"); ?>
<?php
require_once("../function/load_calendar.php");
$events = get_events();
$events = get_json($events);
?>
<body>
	<header class="top_header">
		<?php include("../include/header.php") ?>
	</header>
	<div class="full_calendar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="info_cal">
						<h4>Календар заходів</h4>
						<p>Тут ви можете подивитись графік проходження заходів</p>
					</div>
					<div class="content_cal">
						<script>var events = <?php echo $events ?>;</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<?php include("../include/footer.php") ?>
	</footer>	
	<?php include("../include/bot_script.php") ?>
</body>
<?php include("../modal_window.php") ?>
</html>