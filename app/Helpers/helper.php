<?php

if (!function_exists("create_storage_image"))
{
    function create_storage_image(string $image_name , string $file_path = "") : string
    {

        return asset("storage/$file_path/$image_name");
    }
}
