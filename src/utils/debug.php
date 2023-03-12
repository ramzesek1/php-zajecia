<?php


function dump($params)
{
    echo ('
        <div style="
        display:inline-block;
        background: green;
        border 1px solid black;
        padding: 10px;
        color:white;
        ">
        <pre>
        ');
        print_r($params);
        echo ('</pre></div><br>');
}