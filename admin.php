<?php 
  include"header.php";

?>

<table>
   <th>الرقم  </th> 

   <th>  اسم المريض </th> 
  
<th> البريد الالكتروتي  </th> 
<th> التاريخ </th> 



<?php 

 // الاتصال بالداتا بيز 
$host                = "localhost";
$user                = "root";
$password            = "root";
$dbName              = "hospital";
$conn = mysqli_connect($host, $user, $password,$dbName);

//استدعاء معلومات المريض  من الداتا بيز الي صفحة الادمن 

$query = "SELECT * FROM patients";
$result = mysqli_query($conn,$query);

if ($result){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['date'] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "يوجد خطا ماء";
}


?>
