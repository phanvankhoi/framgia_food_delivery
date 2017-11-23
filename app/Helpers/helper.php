<?php

namespace App\Helpers;

class Helper
{
    public static function importFile($file, $path)
    {
        if (isset($file)) {
            $avatarName = $file->hashName();
            $file->move($path, $avatarName);
            
            return $avatarName;
        }
    }
}
