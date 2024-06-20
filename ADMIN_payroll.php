
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<body>
    <header>
        <img src="" alt="" style="width: 50px; height: 50px; margin: 5px; margin-left: 20px; border-radius:50%; border: 1px solid black">
        <p>hello</p>
    </header>

    <nav>
        <div class="container">
            <div class="profile">
                <img src="" alt="" style="width:135px;height:135px;border-radius: 50%;border: 1px solid black">
                <p>Admin</p>
            </div>

            <div class="button">
                <div class="blank">
                </div>

                <div class="buttons">
                    <a href=""><button>APPLICATION</button></a>

                    <a href=""><button style="
                    border-bottom-right-radius: 50px;
                    ">EMPLOYEES</button></a>

                    <a href=""><button style="
                    background-color: white;
                    border-top-left-radius:50px;
                    border-bottom-left-radius:50px;
                    color:black;
                    ">PAYROLL</button></a>
                    <a href="archieve.php"><button style="
                    border-top-right-radius: 50px;
                    ">ARCHIVE</button></a>
                    <button >LOGOUT</button>
                </div>
            </div>
        </div>
    </nav>
   
    <article>
    <div class="selection">
        <select name="position" id="">
            <Option>Technician</Option>
            <Option></Option>
            <Option></Option>
            <Option></Option>
        </select>
    </div>

        <div class="scrolldable-table">
            <table border="1" cellpadding="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>
            <tr>
            
            <?php
                include 'conn.php';

                $selectAll = "SELECT * FROM ADMIN_payroll";

                $query_selectAll = mysqli_query($conn, $selectAll);
                if(mysqli_num_rows($query_selectAll) > 0){
                    while($result = mysqli_fetch_assoc($query_selectAll)){
            ?>
                    <td><?php echo $result['ID']; ?></td>
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
     </article>
</body>
</html>

<?php
    $conn = mysqli_connect("localhost", "root" , "", "DB");

    
?>