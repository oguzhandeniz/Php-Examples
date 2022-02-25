<?php
echo "<pre>";

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function controlNull($arrayValue)
{
    return ($arrayValue != "" || $arrayValue != NULL);
}

$planets = array_filter($planets, "controlNull");

function rand_arr(array $arr, int $n): array
{
    $rand_key = array_rand($arr, $n);
    $new_rand_arr = [];

    foreach ($rand_key as $key) {
        $new_rand_arr[] =
            [
                $arr[$key],
            ];
    }
    return $new_rand_arr;
}

print_r(rand_arr($planets, 4));
print_r(rand_arr($planets, 2));
print_r(rand_arr($planets, 3));
print_r(rand_arr($planets, 2));
?>