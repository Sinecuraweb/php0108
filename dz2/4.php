<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №4</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ 2 , Задача 4</h1><a href=".">вернуться</a><hr>

<?php



function multy_table($tr, $td) {
    if (($tr === (int)$tr) & ($td === (int)$td)) {

        if (($tr >= 1) & ($td >= 1)) {

            for ($column_tab = 1; $column_tab <= $tr; $column_tab++) {

                for ($line_tab = 1; $line_tab <= $td; $line_tab++) {

                    $result = $column_tab * $line_tab;
                    echo $result . " ";
                    if ($result < 10) {
                        echo "&nbsp ";
                    }
                }
                echo "<br />";
            }
        }
    } else {
        echo "Неверно введены входные данные";
    }
}

multy_table(3,3);

?>

</body>
</html>