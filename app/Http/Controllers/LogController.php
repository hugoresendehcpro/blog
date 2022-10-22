<?php

namespace App\Http\Controllers;

use App\Http\MyClasses\DBLogger;
use App\Http\MyClasses\FileLogger;
use App\Http\MyClasses\CloudLogger;


class LogController extends Controller
{

    public function log()
    {
        $target = config('log.target');

        $content = "69";

        if ($target == 'db') {
            (new DBLogger)->log($content);
        } elseif ($target == 'file') {
            (new FileLogger)->log($content);
        } else {
            (new CloudLogger)->log($content);
        }
    }
}
