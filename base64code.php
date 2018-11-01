 <?php 
 $images = $_POST['image'];
 if(!empty($images)){
	 $img = str_replace('data:image/png;base64,', '', $images);
	 $img = str_replace(' ', '+', $img);
	 $data = base64_decode($img);

	 $uniqueId = uniqid() . '.png';
	 $file = $uniqueId;
	 //$success = file_put_contents($file, $data);
	 //$img_path = $file;
	 $img_path = $uniqueId;
	 } else {
		$img_path = '';
	 }
	 $p = array(
		'success' => 1,
		'img_path' => $img_path
	 );
	 echo json_encode($p);
	 ?>