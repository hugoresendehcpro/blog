<?php

namespace App\Http\MyClasses;

class AmazonS3Image implements \App\interfaces\ImageManage
{

    public function __construct()
    {
        //TODO inject Amazon package
    }

    public function upload(): bool
    {
        // TODO implement code to save the file on Amazon S3

        return true; // File uploaded
    }

    public function remove(): bool
    {
        // TODO implement code to remove the file from Amazon S3

        return true; // File removed
    }
}
