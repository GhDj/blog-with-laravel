<?php


namespace App\Helpers;


class General{
    public function GetFileName($filename) {
        return preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    }
}