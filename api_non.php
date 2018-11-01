<?php 
session_start();
$key = "cashsuvidha";

/*
$json = file_get_contents('php://input');
$json_result = json_decode($json);
echo "hello";
print_r($json_result);*/

//exit();


/*echo "hello";
function test(){
$json = file_get_contents('php://input');
$json_result = json_decode($json);
return($json_result);
}
test();
exit()*/
//echo "hello";
$servername = 'localhost';
$username   = 'cashsuvidbadmin';
$password   = 'Pass@csdbadmin';

$conn = mysql_connect($servername,$username,$password);

if(!$conn)
{
	die("Could not connect to server");
}

else
{
	$db_conn = mysql_select_db('cashsuvidhadb');
	

	
	if(!$db_conn)
	{
		die("Could not select database");
	}
	
}

?>




<form  method="post">
<input type="text" name="name" value="tarun"/>
<input type="text" name="email" value="trnsaxena9@gmail.com"/>
<input type="hidden" name="key" value="cashsuvidha"/>
<input type="submit" name="submit" value="submit"/>
</form>









<?php




if($_SERVER['REQUEST_METHOD'] == "POST")
      {
	        
			
		//	print_r($_POST);
			
	  		$request_body = file_get_contents('php://input');
            $data = json_decode($request_body);
			$result = explode('&',$data);
			  
			
		
		
		if($data->key == 'cashsuvidha')
		  {
			$da =array();
		  
			$sql= "select fname,email,phone,city from manage_users where city not in('Noida','Ghaziabad','Gurgaon','Delhi','Faridabad')";
			$rs = mysql_query($sql);
			while($result = mysql_fetch_assoc($rs))
			 {
			 $da[] = $result;
				//print_r($result);
			 }
		     echo json_encode($da);
		  }
		else{
			 echo "your key does not exist";
			 exit();
			}
	   
    }

  ?>