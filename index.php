<?PHP

$method = $_SERVER['REQUEST_METHOD'];
//process only post meathod
if($method == "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decod($requestBody);
	
	$text = $json->result->parameters->any;
	
	switch ($text) {
		case 'coding':
		$speech = "coding is writing the code to perform some actions";
		break;
		
		default:
			$speech = "Sorry, I was not able to answer your question";
		break;
	}
	
	
	$response = new \stdClass();
	$response->speech = "";
	$response->sidplayText = "";
	$response->sidplayText = "webhook";
	echo json_encode($response);
	
}else{
	echo "meathod not allowed";
}

?>