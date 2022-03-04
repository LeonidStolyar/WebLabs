<?php

function printStringReturnNumber() 
{
    echo nl2br("stroka \n");
    return 19;
}

$my_num = printStringReturnNumber();
echo "return = $my_num";