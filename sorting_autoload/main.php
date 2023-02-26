<?php

namespace CloudStorage;
include "autoload.php";

use \CloudStorage\FileSystem\Files\Images\Jpeg;
use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;

class Main
{
    function __construct()
    {
        $mailer = new Mailer;
        $mailer->sendMail();

        $scanner = new Scanner();
        $scanner->scan();

        $images = new Jpeg();
        echo $images->getDimension();
    }
}

new Main();