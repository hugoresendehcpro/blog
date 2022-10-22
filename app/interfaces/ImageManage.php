<?php

namespace App\interfaces;

interface ImageManage
{
    public function upload(): bool;

    public function remove(): bool;
}
