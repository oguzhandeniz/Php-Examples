<?php

function ucgen($limit, $i=0, $j=0)
{
    while ($i <= $limit)
    {
        for ($i = 0; $i <= $limit; $i++)
        {
            for ($j = 0; $j <= $i; $j++)
            {
                echo "0 ";
            }
            echo "<br>";
        }
    }
}
echo ucgen(15);

?>


