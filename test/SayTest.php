<?php

require __DIR__ . '/../vendor/autoload.php';

use Zhange\HelloWord\Say;
use Zhange\HelloWord\Languages\Chinese;
use Zhange\HelloWord\Languages\English;

class SayTest
{

    public function __invoke()
    {

        $say = new Say();
        $say->setLocale(new Chinese());
        $say->hello();

        $say->setLocale(new English());
        $say->hello();
    }

}

(new SayTest())();