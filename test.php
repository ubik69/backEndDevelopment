<html>
    <head>

    <title>Student grade</title>
    </head>

    <body>


    <style>    

    h1{

        color:orange;

    }

    body{

        background-color:#c068c4;

    }

    </style>
    
    <h1>

    great website

    </h1>


    <form action="test6.php" method="post">
    <label>Student Name</label>
    <input type="text" name="sname"><br>
    <label>StudentId</label>
    <input type="text" name="sid"><br>
    <label>StudentLevel</label>
    <input type="text" name="slevel"><br>
    <label>Backendmodule</label>
    <input type="text" name="backend"><br>
    <label>Frontendmodule</label>
    <input type="text" name="frontend"><br>
    <label>CPSmodule</label>
    <input type="text" name="cps"><br>
    <label>SoftwareDesign</label>
    <input type="text" name="design"><br>
    <input type="submit" value="Get Grade.">
    </form>

    


    <?php
    $sname=$_POST['sname'];
    $sid=$_POST['sid'];
    $slevel=$_POST['slevel'];
    $backend=$_POST['backend'];
    $frontend=$_POST['frontend'];
    $cps=$_POST['cps'];
    $design=$_POST['design'];
    $totalmark=$design+$cps+$frontend+$backend;
    $avrgmark=$totalmark/4;
    



    if($avrgmark<=39){

        $result="failed.";

    }elseif($avrgmark>=40 && $avrgmark<=49){

        $result="your grade is BB.";


    }elseif($avrgmark>=50 && $avrgmark<=59){

        $result="your grade is BA.";


    }
    elseif($avrgmark>=60 && $avrgmark<=69){

        $result="your grade is AB.";


    }
    elseif($avrgmark>=70 && $avrgmark<=100){

        $result="your grade is AA.";


    }elseif($avrgmark>100){

        $result="null.";

    }


    echo "<br>The student name is $sname<br>";
    echo "<br>The student id is $sid<br>";
    echo "<br>The student level is $slevel<br>";
    echo "<br>Marks obtained in BackEnd is $backend<br>";
    echo "<br>Marks obtained in FrontEnd is $frontend<br>";
    echo "<br>Marks obtained in CPS Module is $cps<br>";
    echo "<br>Marks obtained in Software Designing is $design<br>";
    echo "<br>Total marks obtained $totalmark out of 400<br>";
    echo "<br>And the result is $result <br>";


 
 








    ?>
    

    </body>




</html>