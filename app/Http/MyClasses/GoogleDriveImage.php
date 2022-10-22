<?php

namespace App\Http\MyClasses;

class GoogleDriveImage implements \App\interfaces\ImageManage
{

    public function __construct()
    {
        //TODO inject Google Drive package
    }

    public function upload(): bool
    {
        // TODO implement code to save the file on Google Drive

        return true; // File uploaded
    }

    public function remove(): bool
    {
        // TODO implement code to remove the file from Google Drive

        return true; // File removed
    }
}
