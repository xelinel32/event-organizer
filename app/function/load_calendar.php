<?php 
include 'configdb.php';
function get_events(){
	global $conn;
	$query = "SELECT `id`, `title`, `start_event`, `end_event` FROM events";
	$res = mysqli_query($conn,$query);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_json($arr){
	$data = '[';
	foreach($arr as $item){
		$data .= '{ "start": "' . $item['start_event'] . '","url": "../pages/big_events?event=' . $item['id'] . '","end": "' . $item['end_event'] . '","title": "' . $item['title'] . '" }, ';
	}
	$data .= ']';
	return $data;
}
?>