<?php

if (!function_exists("create_storage_image"))
{
    function create_storage_image(string $image_name , string $file_path = "") : string
    {
        return storage_path($file_path."/".$image_name);
    }
}
