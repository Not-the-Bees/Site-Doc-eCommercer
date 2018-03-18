<?php

spl_autoload_register('appAutoload');

function appAutoload($model)
{
    require "../models/" . $model . ".php";
}