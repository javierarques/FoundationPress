<?php

/**
 * Prints the content of a variable
 */
function dump()
{
    list($callee) = debug_backtrace();
    $arguments = func_get_args();
    $total_arguments = count($arguments);
 
    echo '<fieldset style="background: #fefefe !important; border:2px red solid; padding:5px">';
    echo '<legend style="background:lightgrey; padding:5px;">'.$callee['file'].' @ line: '.$callee['line'].'</legend><pre>';
    $i = 0;
    foreach ($arguments as $argument)
    {
        echo '<br/><strong>Debug #'.(++$i).' of '.$total_arguments.'</strong>: ';
        print_r($argument);
    }
 
    echo "</pre>";
    echo "</fieldset>";
}