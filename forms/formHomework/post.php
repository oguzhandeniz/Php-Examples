<?php

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    if (empty($_POST["num"]))
    {
        echo "Please enter a number.";
    }
    else
    {
        echo "The Entered Number: " . $_POST["num"] . "<br>";
        $result = filtMode($_POST["num"]);

        if ($result !== 0)
        {
            echo "The number you enter cannot be divided by 3. The first divisible number: " .
                ($_POST["num"] + (3 - $result));
        }
    }
}

function filtMode($number)
{
    if ($number % 3 == 0)
    {
        return 0;
    }
    else
    {
        return $number % 3;
    }
}

?>