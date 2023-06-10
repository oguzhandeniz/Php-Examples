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

        class Format
        {
            public $text;
            public $style;


            public function Text($MetinDegeri)
            {
                $this->text        =    $MetinDegeri;
                return $this;
            }

            public function Color($RenkDegeri)
            {
                $this->style        =    "color:" . $RenkDegeri . "; ";
                return $this;
            }

            public function Size($BoyutDegeri)
            {
                $this->style        .=    "font-size:" . $BoyutDegeri . "; ";
                return $this;
            }

            public function Create()
            {
                return "<div style='" . $this->style . "'>" . $this->text . "</div>";
            }
        }

        $result    =    new Format;

        echo $result->Text("Oğuzhan Deniz - Back-End Developer")->Color("red")->Size("30px")->Create() . "<br />";

        echo $result->Text("Halim Can Ocaklı - Full-Stack Developer")->Color("blue")->Size("25px")->Create() . "<br />";
        
        echo $result->Text("Batın Berkin Topaloğlu - Flutter Developer")->Color("black")->Size("20px")->Create() . "<br />";

    ?>
</body>

</html>