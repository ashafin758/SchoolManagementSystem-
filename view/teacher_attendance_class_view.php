<?php 
    include_once('../model/db_function.php');
    include('teacher_header.php');
    date_default_timezone_set("Asia/Dhaka");

    // $data=[
    //         'student1'=>$_SESSION['student1'],
    //         'student2'=>$_SESSION['student2'],
    //         'student3'=>$_SESSION['student3'],
    //         'student4'=>$_SESSION['student4'],
    //         'student5'=>$_SESSION['student5'],
    //         'student6'=>$_SESSION['student6'],
    //         'student7'=>$_SESSION['student7'],
    //         'student8'=>$_SESSION['student8'],
    //         'student9'=>$_SESSION['student9'],
    //         'student10'=>$_SESSION['student10'],
    //         'student11'=>$_SESSION['student11'],
    //         'student12'=>$_SESSION['student12'],
    //         'student13'=>$_SESSION['student13'],
    //         'student14'=>$_SESSION['student14'],
    //         'student15'=>$_SESSION['student15'],
    //         'student16'=>$_SESSION['student16'],
    //         ];

?>

<h3><b><?php echo "Date : " . date("d-M-Y") . "<br>"; ?></b></h3>
<h3><b><?php echo "Time : " . date("h:i a") . "<br>"; ?></b></h3>
<table border="1" width="100%">
    <tr>
        <td align='center' width="30%"><b>Student Name</b></td>
        <td align='center'><b>Attendance</b></td>
        
    </tr>
    <tr>
        <td > Will Stgermain</td>
        <td align='center'><?php echo $_SESSION['student1'] ?></td>
        
    </tr>
    <tr>
        <td>Aubrey Pinion</td>
        <td align='center'><?php echo $_SESSION['student2'] ?></td>
    </tr>
    <tr>
        <td>Hope Simpler</td>
        <td align='center'><?php echo $_SESSION['student3'] ?></td>
       
    </tr>
    <tr>
        <td>Candida Oneill</td>
        <td align='center'><?php echo $_SESSION['student4'] ?></td>
    </tr>
    <tr>
        <td>Paulita Coletti</td>
        <td align='center'><?php echo $_SESSION['student5'] ?></td>
       
    </tr>
    <tr>
        <td>Gabriella Bracamonte</td>
        <td align='center'><?php echo $_SESSION['student6'] ?></td>
       
    </tr>
    <tr>
        <td>Doug Albury</td>
        <td align='center'><?php echo $_SESSION['student7'] ?></td>
       
    </tr>
    <tr>
        <td>Floy Funes</td>
        <td align='center'><?php echo $_SESSION['student8'] ?></td>
       
    </tr>
    <tr>
        <td>Ewa Saleem</td>
        <td align='center'><?php echo $_SESSION['student9'] ?></td>
       
    </tr>
    <tr>
        <td>Krishna Thweatt</td>
        <td align='center'><?php echo $_SESSION['student10'] ?></td>
       
    </tr>
    <tr>
        <td>Janina Portner</td>
        <td align='center'><?php echo $_SESSION['student11'] ?></td>
       
    </tr>
    <tr>
        <td>Rosaline Bryan</td>
        <td align='center'><?php echo $_SESSION['student12'] ?></td>
       
        
    </tr>
    <tr>
        <td>Marylin Popovich</td>
        <td align='center'><?php echo $_SESSION['student13'] ?></td>
       
        
    </tr>
    <tr>
        <td>Trena Gunther</td>
        <td align='center'><?php echo $_SESSION['student14'] ?></td>
       
        
    </tr>
    <tr>
        <td>Latanya Earls</td>
        <td align='center'><?php echo $_SESSION['student15'] ?></td>
       
        
    </tr>
    <tr>
        <td>Homer Storck</td>
        <td align='center'><?php echo $_SESSION['student16'] ?></td>
       
    </tr>
</table>






<?php 
    include('teacher_footer.php');
?>