<?php

namespace App\Command;

class Deploy extends Command
{
    public function run()
    {
        $preset = self::$args->getArgument('preset');

        echo "Deploy of '{$preset}' started", PHP_EOL;

        Clean::run();
        Download::run();
        Database::run();
        Configure::run();

        echo "Deploy of '{$preset}' is successfull", PHP_EOL;
    }
}
