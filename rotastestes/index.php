<?php

function teste1()
{
    echo "teste1";
}

function teste2()
{
    echo "teste2";
}

function teste3()
{
    echo "teste3";
}

function error404()
{
    echo "ERROR 404 Not found !";
}

$path=trim($_SERVER['REQUEST_URI'],'/');

switch($path){
    case 'teste1':
        teste1();
        break;
    case 'teste2':
        teste2();
        break;
    case 'teste3':
        teste3();
        break;
    default:
        error404();
        break;
}

echo "aasa";
