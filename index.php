<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al shifa Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css">
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="images/logo.png">
            <h2>مستشفى الشفاء</h2>
        </div>
        <div class="book">
            <p>اهلا بك في مستشفى الشفاء ,, للحجز املء الإستمارة أدناة</p>
            <form action="index.php" method="post">
                <input type="text" placeholder="أدخل الاسم" name="name"/>
                <input type="text" placeholder="أدخل البريد الالكتروني" name="email"/>
                <input type="date" name="date"/>
                <input type="submit" value="احجز الان" name="send"/>
            </form>
           

            <?php
            

           /* // connect to database
            $host="localhost";
            $user="root";
            $password="root";
            $dbName ="hospital";
            $conn =mysqli_connect($host,$user,$password,$dbName);*/
            
            
            $host                = "localhost";
            $user                = "root";
            $password            = "root";
            $dbName              = "hospital";
            $conn = mysqli_connect($host, $user, $password,$dbName);


// ارسال معلومات المريض الي قاعده البيانات
              $pName            = $_POST['name'];
              $pEmail           = $_POST['email'];
              $pDate            = $_POST['date'];
              $pSend            = $_POST['send'];
              if($pSend){
                $query = "INSERT INTO patients(name,email,date) VALUE('$pName ','$pEmail ','$pDate ')";
                $result = mysqli_query($conn,$query);
                echo "<p style='color:green'>" . "تم الحجز" . "</p>";
            }
            else{
                echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجدد " . "</p>";
            }


        ?>
            
            
            

             


            
        </div>
    </div>
</body>
</html>