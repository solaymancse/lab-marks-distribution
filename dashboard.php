<?php include('./includes/head.php'); ?>
<?php
include("auth_session.php");
?>
<?php include("./dbcon.php"); ?>
<?php include("./sidemenu.php");?>

<div class="containerbox">
    <div class="header">
        <div class="nav">
            <div class="search">
                <input type="text" placeholder="Search..">
                <button type="submit"><img src="./images/search.png" alt=""></button>
            </div>
            <div class="user">
                <a href="add.php" class="btn">Add New</a>
                <img src="./images/notifications.png" alt="">
                <h1><?php echo $_SESSION['email'];?></h1>
                <div class="img-case">
                    <img src="./images/user.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="cards">
            <div class="card">
                <div class="box">
                    <h1>2194</h1>
                    <h3>Students</h3>
                </div>
                <div class="icon-case">
                    <img src="./images/students.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>53</h1>
                    <h3>Teachers</h3>
                </div>
                <div class="icon-case">
                    <img src="./images/teachers.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>5</h1>
                    <h3>Schools</h3>
                </div>
                <div class="icon-case">
                    <img src="./images/schools.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>350000</h1>
                    <h3>Income</h3>
                </div>
                <div class="icon-case">
                    <img src="./images/income.png" alt="">
                </div>
            </div>
        </div>
        <div class="content-2">
            <div class="recent-payments">
                <div class="title">
                    <h2>Recent Enroll</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table class="table" border='1'>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Teacher</th>
                            <th scope="col">Section</th>
                            <th scope="col">Session</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
        $sql="select * from new_enroll";
        $result=mysqli_query($con,$sql);
        ///echo $wid;
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["courses"]; ?></td>
                            <td><?php echo $row['teacher']?> </td>
                            <td><?php echo $row['section']?></td>
                            <td><?php echo $row['session']?></td>
                            <td class="action"><a>Delete</a></td>

                        </tr>
                        <?php
 } 
}?>


                    </tbody>
                </table>

            </div>
            <div class="new-students">
                <div class="title">
                    <h2>New Students</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>option</th>
                    </tr>
                    <tr>
                        <td><img src="./images/user.png" alt=""></td>
                        <td>John Steve Doe</td>
                        <td><img src="./images/info.png" alt=""></td>
                    </tr>
                    <tr>
                        <td><img src="./images/user.png" alt=""></td>
                        <td>John Steve Doe</td>
                        <td><img src="./images/info.png" alt=""></td>
                    </tr>
                    <tr>
                        <td><img src="./images/user.png" alt=""></td>
                        <td>John Steve Doe</td>
                        <td><img src="./images/info.png" alt=""></td>
                    </tr>
                    <tr>
                        <td><img src="./images/user.png" alt=""></td>
                        <td>John Steve Doe</td>
                        <td><img src="./images/info.png" alt=""></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>