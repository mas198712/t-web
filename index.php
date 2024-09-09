
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบสมัครสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100vw;
            height: 100vh;
        }

        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: top;
            background-image: url(https://images.unsplash.com/photo-1492252719637-c7b68468489b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80);
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 0.02em;
            font-weight: 400;
        }

        .container {
            background-color:linear-gradient(235deg, #FCEAB8, #95A0D6); 
            border-radius: 50px;   
         padding: 40px;
         box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
         text-align: center;
         width: 400px;
         animation:  zoomIn .6s ease forwards, floatImage 4s ease infinite;
    animation-delay: .2.1s , 4.1s;
        }

        @keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale(0);
    }

    100% {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes floatImage{
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-24px);
    }
    100% {
        transform: translateY();
    }
}

        .blurred-box {
            position: relative;
            width: 250px;
            height: 350px;
            top: calc(50% - 175px);
            left: calc(50% - 125px);
            background: inherit;
            border-radius: 2px;
            overflow: hidden;
        }

        .blurred-box:after {
            content: '';
            width: 300px;
            height: 300px;
            background: inherit;
            position: absolute;
            left: -20px;
            right: 0;
            top: -25px;
            bottom: 0;
            box-shadow: inset 0 0 0 200px rgba(255, 255, 255, 0.05);
            filter: blur(10px);
        }

        .user-login-box {
            position: relative;
            margin-top: 30px;
            text-align: center;
            z-index: 1;
        }

        .user-login-box > * {
            display: inline-block;
            width: 200px;
        }

        .user-icon {
            width: 100px;
            height: 100px;
            position: relative;
            border-radius: 50%;
            background-size: contain;
            background-image: url(https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/58570687_2680129875392028_5011432828122955776_n.jpg?_nc_cat=110&_nc_eui2=AeHwg0rU9FWO0yO2VOlHLaiCpe-U71lSklS8IV_Q4WyktDbQSmRx61tHcLEi2Z7rzuFMd8pkXi6JSro2PPxj6W7wMUe7zLE_e_CpixpdjfGquQ&_nc_oc=AQmlDOVZ8xzlsI7L-dGpdcIYJreRp00N5PCFAe6P6vVI11JSbqbRMgn7oBzCeOGLgiB6n2wD2e8D_Nrv_5P6NmBE&_nc_ht=scontent.fbkk5-4.fna&oh=e62846684b09b011d1c1ea35f3c12089&oe=5DDAF870);
        }

        .user-name {
            margin-top: 15px;
            margin-bottom: 15px;
            color: #fff;
        }

        input.user-username, input.user-password {
            display: block;
            width: 200px;
            height: 18px;
            opacity: 0.4;
            border-radius: 2px;
            padding: 15px 15px;
            border: none;
            margin: 0 auto;
            outline: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="mb-4">ระบบสมัครสมาชิก</h4>
                <form action="" method="post">
                    <div class="mb-3 row">
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control user-username"  placeholder="ชื่อ">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-9">
                            <input type="text" name="surname" class="form-control user-username"  placeholder="นามสกุล">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control user-username"  placeholder="username">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control user-password"  placeholder="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                        </div>
                    </div>
                </form>
                <hr>
                <p>เป็นสมาชิกอยู่แล้ว? <a href="signin.php">เข้าสู่ระบบ</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+15q8iK6A5ZKeB2eUkvv0zK3z3eOl" crossorigin="anonymous"></script>
</body>
</html>
<?php 
if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['password'])) {
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    
    // เชื่อมต่อฐานข้อมูล
    require_once 'connect.php';
    
    // ประกาศตัวแปร
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']); // Hash the password for security

    // Check if the username   already exists in the database
    $stmt = $conn->prepare("SELECT id FROM regis_tb WHERE username = :username");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute(array('username' => $username ));

    if ($stmt->rowCount() > 0) {
        // If username already exists
        echo '<script>
            setTimeout(function(){
                swal({
                    title: "username ซ้ำ!!",
                    text: "กรุณาสมัครใหม่อีกครั้ง",
                    type: "warning"
                }, function(){
                    window.location = "index.php";
                });
            }, 1000);
        </script>';
    } else {
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO regis_tb (name, surname, username, password) VALUES (:name, :surname, :username, :password)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            echo '<script>
                setTimeout(function(){
                    swal({
                        title: "สำเร็จ!",
                        text: "สมัครสมาชิกเรียบร้อยแล้ว",
                        type: "success"
                    }, function(){
                        window.location = "signin.html"; // Redirect to login page after success
                    });
                }, 1000);
            </script>';
        } else {
            echo '<script>
                setTimeout(function(){
                    swal({
                        title: "เกิดข้อผิดพลาด",
                        text: "Error!",
                        type: "error"
                    }, function(){
                        window.location = "index.php";
                    });
                }, 1000);
            </script>';
        }
    }


    // Close database connection
    $conn = null;
}
?>