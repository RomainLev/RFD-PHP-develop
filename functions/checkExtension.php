<?php

function checkExtension(string $type,string $file) : bool {
    if ($type === "image"){
        $fileExtension = array("jpeg", "jpg", "png", "bmp", "gif", "tiff", "webp");
        $file = strtolower($file);
        $extension = substr(strchr($file, '.'), 1);
        if (in_array($extension, $fileExtension))
            return true;
        else
            return false;

    }
}