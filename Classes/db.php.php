<?php
//creating new sql with con as variable
//$con = new mysqli('servername','username','password','db name')
$con  = new mysqli('localhost','root','','user_library_mgt');
if($con->connect_errno){
	echo 'Failed to connect';
} else {
	echo 'Success';



// query for fetching the data from da+tabase
	$sql = 'select * from user_data1 where user_name LIKE "%shiva%" ';
	//echo $sql = 'CALL userlibdata(1)';

	$res = mysqli_query($con,$sql);
        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
				echo"<pre>";
				print_r($row);
			}
         }


// given query is for insert values into the user_data1 table

    $sql = "insert into user_data1 (`user_name`,`title_of_the_book`,`author`,`book_cost`,`book_renewal_date`,`book_return_date`,`Delay_fine`) values ('balamani','Devops','abcde','265','2020-02-02','2020-01-12','0')";
    $res = mysqli_query($con,$sql);


// given query is for updating the existing data in the table

    $sql = "update user_data1 SET book_cost = 550 where user_id = 7";
   // $res = mysqli_query($con,$sql);

// given query is for deleting a data from the table

    $sql = "delete from user_data1 where user_id=9";
   // $res = mysqli_query($con,$sql);


    //
    $sql = "insert into user_data1 (`user_name`,`title_of_the_book`,`author`,`book_cost`,`book_renewal_date`,`book_return_date`,`Delay_fine`) values ('arun','C++','asd','220','2020-02-04','2020-01-25','50')";
 //   $res = mysqli_query($con,$sql);
   // echo "Printing last insert id = ". $last_insert_id = mysqli_insert_id($con);

}
?>