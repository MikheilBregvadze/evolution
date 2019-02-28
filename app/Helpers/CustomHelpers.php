<?php

function setActiveBySegments(string $path, string $class_name = "active")
{  
    return Request::is($path . '*') ? $class_name :  '';
}