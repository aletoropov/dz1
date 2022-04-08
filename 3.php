<?php

$age = 66;

if ($age <= 65 && $age >= 18) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age <= 17 && $age == 1) {
    echo 'Вам еще рано работать';
} elseif ($age || $age == 0) {
    echo 'Неизвестный возраст';
}
