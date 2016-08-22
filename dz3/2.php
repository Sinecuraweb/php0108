<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>ДЗ 3</title>
    <link rel="stylesheet" href="style.css"></head>
<body><h1>Домашнее задание №3. Задача 2</h1><a href=".">вернуться</a><hr>

<?php

$jsonPath1 = 'output.json';
$jsonPath2 = 'output2.json';

$jsonFile1 = file_get_contents($jsonPath1);
$jsonFile2 = file_get_contents($jsonPath2);

$jsonArray1 = json_decode($jsonFile1, true);
$jsonArray2 = json_decode($jsonFile2, true);

$result = my_array_compare($jsonArray1, $jsonArray2, 0);


//сравнивает элементы массива по порядку;
function my_array_compare($jsonArray1, $jsonArray2, $depth) {
    $result = [];

    foreach ($jsonArray2 as $key => $value) {
        if (!isset($jsonArray1[$key])) {
            $result[$key] = ['not exist', $value];
        }
        else if ($jsonArray1[$key]!=$value) {
            if (is_array($jsonArray2[$key])) {
                if ($depth < 1) {
                    $result[$key] = my_array_compare($jsonArray1[$key], $jsonArray2[$key], $depth + 1);
                }
                else {
                    $result[$key] = [$jsonArray1[$key], $value];
                }
            }
            else {
                $result[$key] = [$jsonArray1[$key], $value];
            }
        }
    }
    return $result;
}
echo "<pre>";
print_r($result);
//
//$result = compare_contents($jsonArray1['contents'], $jsonArray2['contents']);
////сравнивает по существующим значениям массива 'contents' (т.к. порядок и количество элементов в этом массиве может быть разное).
//function compare_contents($jsonArray1, $jsonArray2) {
//    $cArr1 = $cArr2 = $result = [];
//    foreach ($jsonArray1 as $item) {
//        $cArr1[$item['productID']] = $item['quantity'];
//    }
//    foreach ($jsonArray2 as $item) {
//        $cArr2[$item['productID']] = $item['quantity'];
//    }
//
//    foreach ($cArr1 as $key => $value) {
//        if (!isset($cArr2[$key])) {
//            $result['_left'][$key] = [$value, 'not exist'];
//        }
//        else if ($value!=$cArr2[$key]) {
//            $result['_left'][$key] = [$value, $cArr2[$key]];
//        }
//    }
//
//    foreach ($cArr2 as $key => $value) {
//        if (!isset($cArr1[$key])) {
//            $result['_right'][$key] = ['not exist', $value];
//        }
//        else if ($value!=$cArr1[$key]) {
//            $result['_right'][$key] = [$cArr1[$key], $value];
//        }
//    }
//
//    return $result;
//}
//
//print_r($result);
echo "</pre>";

?>
</body>
</html>