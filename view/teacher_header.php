<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: teacher_login.html');
	}
    $name=$_SESSION['nam'];


   // header('location: ../controller/teacher_class_schedule.php');
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $name ?></title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td align="center" width="550px"><h2><img src="../assets/logo.png" width="40px" height="60px" alt=""> School Management System</h2></td>
            <td width="400px" align="center"><h3><b>Welcome <a href="teacher_profile.php"><?php echo $name ?></a></b></h3> </td>
            <td align="center"><a href="../view/teacher_dashboard.php">Home</a> | <a href=" ">Notifications</a> | <a href="../view/teacher_settings.php">Settings | <a href="../controller/teacher_logout.php">Logout</a></a></td>
        </tr>
        <tr height=600px>
            <td style="font-size: large;">
                <ul>
                    <li>
                        Assignments
                        <ul>
                            <li><a href="../view/teacher_uplaod.php">upload files</a></li>
                        </ul>
                    </li>
                    <li>
                        Attendence
                        <ul>
                            <li><a href="../view/teacher_attendance.php">Take Attendance</a></li>
                            <li><a href="../view/teacher_attendance_view.php">View Attendance</a></li>
                        </ul>
                    </li>
                    <a href="../view/teacher_course_result.php"><li>Course Result</li></a>
                    <a href="../view/teacher_student_view.php"><li>Student Details</li></a>
                    <a href="../view/search_student2.php"><li>Search Student</li></a>
                    <a href=""><li>Contact Parents</li></a>
                    <li>
                        Others
                        <ul>
                            <li><a href="../view/download_form.php">Download Forms</a></li>
                            <li>
                                <a href="../view/academic_calender.php">Academic Calender</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </td>
            <td align="center" colspan="2">