<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Records</title>
    </head>
    <body>
        <header>
            <h1>Student Records</h1>
        </header>
        <?php
        include('Student.php');
        
        $count = 1;  // used to number the students.
        $students = array();  //array to hold the student records.
        
        //student 1
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //student 2
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //student 3
        $third = new Student();
        $third->surname = "Koop";
        $third->first_name = "Zachary";
        $third->add_email('school','zkoop@my.bcit.ca');
        $third->add_grade(99);
        $third->add_grade(76);
        $third->add_grade(59);
        $students['k009'] = $third;
        
        
        ksort($students); // one of the many sort functions

        //Print out students.
        foreach($students as $student) {
            echo 'Student ' . $count;
            echo $student->toString();
            $count++;
        }
        ?>
    </body>
</html>
