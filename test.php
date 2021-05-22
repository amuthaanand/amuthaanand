
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

if(isset($_GET['edit']))
	{
		$editid=$_GET['edit'];
		// $edit_id=$_GET['edit_id'];
	}
	
if(isset($_POST['submit']))
  {
	$part_name=$_POST['part_name'];
	$quantity=$_POST['quantity'];
	// $brand_name=$_POST['brand_name'];
	$up_time=$_POST['up_time'];
	// $unit=$_POST['unit'];
	$result=$_POST['result'];
	
	
	$sql="UPDATE procurement_list SET total=(:result)  WHERE id='28'";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':result', $result, PDO::PARAM_STR);
	$query->execute();
	$msg="Information Updated Successfully";
	
}    
?>
<!DOCTYPE html>





<body>
<?php
	$sql = "SELECT * from procurement_list where id = :edit";
	$query = $dbh -> prepare($sql);
	$query->bindParam(':edit',$editid,PDO::PARAM_INT);
	$query->execute();
	$result=$query->fetch(PDO::FETCH_OBJ);
	$cnt=1;	?>
	
    <div id="page-wrap">
	<h1>PHP - Simple Calculator Program</h1>
	<?php
		$first_num = $_POST['first_num'];
		$second_num = $_POST['second_num'];
		$operator = $_POST['operator'];
		$result = '';
		if (is_numeric($first_num) && is_numeric($second_num)) {
			switch ($operator) {
				case "Add":
				$result = $first_num + $second_num;
					break;
				case "Subtract":
				$result = $first_num - $second_num;
					break;
			}
		}

	?>
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
			<input type="submit" name="submit" />
	  </form>
    </div>
</body>
</html>
<?php } ?>