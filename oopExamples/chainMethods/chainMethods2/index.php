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

        class Calculate
        {
            private $result    =    0;

            function __construct($numValue)
            {

                $this->result    =    $numValue;
            }

            public function Sum($numValueForSum)
            {

                $this->result    +=    $numValueForSum;
                return $this;
            }

            public function Subs($numValueForSub)
            {

                $this->result    -=    $numValueForSub;
                return $this;
            }

            public function Mult($numValueForMult)
            {

                $this->result    *=    $numValueForMult;
                return $this;
            }

            public function Div($numValueForDiv)
            {

                $this->result    /=    $numValueForDiv;
                return $this;
            }

            public function Show()
            {
                echo $this->result . "<br />";
                return $this->result;
            }
        }

        $calc1    =    new Calculate(1000);
        $calc1->Sum(500)->Subs(300)->Mult(2)->Div(8)->Show();

        $calc2    =    new Calculate(5000);
        $calc2->Mult(2)->Div(4)->Show() . "<br />";

        $calc3    =    new Calculate(1000000);
        $calc3->Div(10)->Mult(2)->Show() . "<br />";

        $calc3    =    new Calculate(100);
        $calc3->Mult(2)->Div(2)->Div(5)->Show() . "<br />";
    ?>
    
</body>

</html>