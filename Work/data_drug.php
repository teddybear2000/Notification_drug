<?php include('connection.php'); ?>
<?php
$select_stmt = $db->prepare("SELECT * FROM drugs");
$select_stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>

    <!-- input fornt -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- input bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@300&display=swap" rel="stylesheet">
    <link href="../day1/normalize.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    

    <!-- สร้างตาราง -->

    <div id="date-time"></div>
    <h1 class="text-data mt-5" style="text-align:center;">🏩Data Drug👩‍💻💊</h1>
    <div class="container">
        <a class="btn btn-primary mb-3" href="control.php">เพิ่ม</a>
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                    <th scope="col">ช่องที่</th>
                    <th scope="col">ชื่อยา</th>
                    <th scope="col">เวลา</th>
                    <th scope="col">การรับประทาน</th>
                    <th scope="col">วันหมดอายุ</th>
                    <th scope="col">ลบ</th>
                    <th scope="col">แก้ไข</th>
                </tr>
            </thead>
            <tbody>

                <?php echo "<script>const zeroFill;</script>" ?>
                <?php while ($row =  $select_stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <?php $eat = " " ?>

                        <td><?php echo $row['channel']; ?></td>
                        <td><?php echo $row['drug_name']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td>
                            <?php
                            if ($row['time_to_eat'] == "before") {
                                $eat = "ก่อนอาหาร";
                                echo $eat;
                            } else {
                                $eat = "หลังอาหาร";
                                echo $eat;
                            }
                            ?>
                        </td>
                        <?php
                        echo "<script>
                         // Function to format 1 in 01
                         zeroFill = n => {
                             return ('0' + n).slice(-2);
                         }
             
                         // Creates interval
                         interval = setInterval(() => {
                             // Get current time
                             const now = new Date();
             
                             // Format date as in mm/dd/aaaa hh:ii:ss
                             const dateTime = zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());
                            if (dateTime == '${row['time']}') { 
                                
                                swal({
                                    title: 'แจ้งเตือน',
                                    text: 'ได้เวลาทานยา ${row['drug_name']} ${eat}',
                                    icon: 'warning',
                                    button: 'ตกลง',
                                  });
                            }
                             // Display the date and time on the screen using div#date-time
                             document.getElementById('date-time').innerHTML = dateTime;
                         }, 1000);
                     </script>"
                        ?>
                        <td><?php echo $row['exp']; ?></td>



                        <!--  -->

                        <div class="btn">
                            <td><a href="delete_control.php?id=<?php echo $row['drug_id']; ?>" class="btn " style="color:#fff ; background-color: grey;">ลบ</a>
                            </td>
                            <td><a href="edit_control.php?id=<?php echo $row['drug_id']; ?>" class="btn " style="color: #fff; background-color: sandybrown;">แก้ไข</button></td>

                        </div>
                    </tr>
                <?php } ?>


            </tbody>
        </table>
    </div>

    
</body>


</html>