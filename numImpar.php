<?php

for($num = 0; $num <= 100; $num++){
    if($num % 2 == 0){
        continue;
    }
    echo $num .PHP_EOL;
}
