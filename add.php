<?php include("./includes/head.php");?>

<?php

require('dbcon.php');
if(isset($_POST['submit']))
{
    $course=$_POST['course'];
    $teacher=$_POST['teacher'];
    $section=$_POST['section'];
    $session=$_POST['session'];
    $sql="insert into new_enroll (courses,teacher,section,session) values('$course','$teacher','$section','$session')";

    $result=mysqli_query($cons,$sql);

    if($result)
    {
        echo "<div class= 'confirmation'>
            <h3>You are Enroll successfully!</h3><br/>
            <p class ='link'><a href='dashboard.php'>Go to Dashboard</a></p>
            </div>";   
    }
    else
    {
        echo "<div class= 'fail'>
        <h3>Required field are misssing!</h3><br/>
        <p class ='link'><a href='add.php'>Click to add Again</a></p>
        </div>";   
    }

}
?>
<div class="topDiv"><i class="fa-solid fa-house"></i><a href="dashboard.php">Dashboard</a></div>
<div class="maindiv">

    <form method="post" action="">
        <label>Course Name</label>
        <input type="text" placeholder="Course Name" name="course" />
        <label>Teacher Name </label>
        <input type="text" placeholder="Teacher Name" name="teacher" />
        <label>Section</label>
        <input type="text" placeholder="Section" name="section" />
        <label>Session</label>
        <input type="text" placeholder="Session" name="session" />
        <input type="submit" name="submit" value="Submit"/>
       
    </form>

   
</div>
