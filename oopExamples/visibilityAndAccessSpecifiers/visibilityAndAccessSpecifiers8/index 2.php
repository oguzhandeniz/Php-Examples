<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        class Courses
        {

            public function AAA()
            {
                $course        =    "Advanced C# Tutorial<br /><br />";
                return $course;
            }

            public function BBB()
            {
                $course        =    "Advanced PHP Tutorial<br /><br />";
                return $course;
            }

            public function CCC()
            {
                $course        =    "Advanced Flutter Tutorial<br /><br />";
                return $course;
            }
        }

        class Instructor extends Courses
        {

            public function AAA()
            {
                $teacher        =    "Halim Can Ocaklı<br />" . parent::AAA();
                return $teacher;
            }

            public function BBB()
            {
                $teacher        =    "Oğuzhan Deniz<br />". parent::BBB();
                return $teacher;
            }

            public function CCC()
            {
                $teacher        =    "Batın Berkin Topaloğlu<br />". parent::CCC();
                return $teacher;
                
            }
        }

        $obj    =    new Instructor;

        echo $obj->AAA();
        echo $obj->BBB();
        echo $obj->CCC();


    ?>
</body>

</html>