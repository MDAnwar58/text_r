<?php

namespace CloudStorage\FileSystem\Files\Images;

use CloudStorage\FileSystem\Files\Contracts\ImageController;

class Jpeg implements ImageController
{
    function getDimension()
    {
        echo "sdsd";
    }
}