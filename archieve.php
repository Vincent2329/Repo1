<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="New folder/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col">
        <header>
        <img src="" alt="" style="width: 50px; height: 50px; margin: 5px; margin-left: 20px; border-radius:50%; border: 1px solid black">
        <p>hello</p>
        </header>
        </div>
    </div>

        <div class="row">
            <div class="col-lg-3">
            <nav>
        <div class="container">
            <div class="profile">
                <img src="" alt="" style="width:135px;height:135px;border-radius: 50%;border: 1px solid black">
                <p>
                    <?php
                        include 'conn.php';
                        session_start();
                       echo $_SESSION['fname'] ." ". $_SESSION['lname'];
                    ?>

                </p>
            </div>

            <div class="button">
                <div class="blank">
                </div>

                <div class="buttons">
                    <a href=""><button>APPLICATION</button></a>

                    <a href=""><button>EMPLOYEES</button></a>
                    
                    <a href="ADMIN_payroll.php"><button style="
                    border-bottom-right-radius: 50px;
                    ">PAYROLL</button></a>
                    <div class="back" style="background-color:#435D5A;">
                    <a href="#"><button style="
                    background-color: white;
                    border-top-left-radius:50px;
                    border-bottom-left-radius:50px;
                    color:black;
                    ">ARCHIVE</button></a>
                    </div>
                    <button style="
                    border-top-right-radius: 50px;
                    ">LOGOUT</button>
                </div>
            </div>
        </div>
    </nav>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12" >
                        <div class="selection">
                            <select name="position" id="">
                                <Option>Technician</Option>
                                <Option></Option>
                                <Option></Option>
                                <Option></Option>
                            </select>

                            <button class="pay">Pay</button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="scrolldable-table">
            <table cellpadding="0">
                <thead>
                    <tr>
                        <th class="first">Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="last">Action</th>
                    </tr>
                </thead>
            <tbody>
            <tr>
            
            <?php
                include 'conn.php';

                $selectAll = "SELECT * FROM archive";

                $query_selectAll = mysqli_query($conn, $selectAll);
                if(mysqli_num_rows($query_selectAll) > 0){
                    while($result = mysqli_fetch_assoc($query_selectAll)){
            ?>
                    <td><?php echo $result['Username']; ?></td>
                    <td><?php echo $result['Name']; ?></td>
                    <td><?php echo $result['Email']; ?></td>
                    <td style="width:100px"><Button>Details</Button></td>
            </tr>
                    </tbody>
            <?php
                    }
                }else{
                    echo "Hello";
                }

            ?>
            </table>
        </div>
                    </div>
                    <div class="col-lg-12"></div>
                </div>
            </div>
        </div>
</body>
</html>
