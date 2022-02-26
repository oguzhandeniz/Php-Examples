<?php
echo "<pre>";

function filter($p)
{
    return is_array($p) ? array_map('filter', $p) : htmlspecialchars(trim($p));
}

$arr = array_map('filter', $_POST);
print_r($arr);


?>