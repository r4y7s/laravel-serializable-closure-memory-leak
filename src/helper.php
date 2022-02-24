<?php

if (!function_exists('echo_memory_usage')) {
    function echo_memory_usage(string $step)
    {
        $mem_usage = memory_get_usage();
        echo "$step-> ";

        if ($mem_usage < 1024) {
            echo $mem_usage . " bytes";
        } elseif ($mem_usage < 1048576) {
            echo round($mem_usage / 1024, 2) . " kilobytes";
        } else {
            echo round($mem_usage / 1048576, 2) . " megabytes";
        }

        echo PHP_EOL;
    }
}