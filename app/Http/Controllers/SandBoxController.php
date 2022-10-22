<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class SandBoxController extends Controller
{
    public function tryCatch ()
    {
        $data = [];

        try {
            $f = fopen('files/myprops2.csv', 'r');

            do {
                $row = fgetcsv($f);
                $data[] = $row;
            } while ($row);

            fclose($f);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        var_dump($data);
    }
}
