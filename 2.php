<?php

const ALL_DRAWS= 80; //всего рисконков
const CRAYON_DRAWS = 23; //рисунков выполнены фломастерами
const PENCIL_DRAWS = 40; //рисунков выполнены карандашами

(int) $paintsDraws = ALL_DRAWS - CRAYON_DRAWS - PENCIL_DRAWS;

echo 'Рисунков выполненных красками: ' . $paintsDraws;