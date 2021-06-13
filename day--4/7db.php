//collecting data
	$emailid=$_POST['emailid'];

	//echo $emailid;
	//push data to db sever

	//sever details
	$server="localhost:3306";
	$dbname="email";
	$username="root";
	$password="";

	$sFlag=0;
	// connecting to db
	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn) {
		echo 'Sever connection Failure';
		$sFlag=0;
	} else {
		echo 'Sever connection Success';
		$sFlag=1;
	}
	echo '<br>';
	if ($sFlag==1) {
		//create sql to insert data to table
		$sql="INSERT INTO email(emailid) VALUES ('".$emailid."');";

		//echo $sql;

		//query db sever
		$a=mysqli_query($conn,$sql);
		if ($a) {
			echo "Data inserted.";
		} else {
			echo $conn->error;
		}
	}