<?php

namespace Goldfinch\Blocks\Commands;

use Goldfinch\Taz\Console\GeneratorCommand;

#[AsCommand(name: 'vendor:blocks:config')]
class BlockConfigCommand extends GeneratorCommand
{
    protected static $defaultName = 'vendor:blocks:config';

    protected $description = 'Create Blocks YML config';

    protected $path = 'app/_config';

    protected $type = 'config';

    protected $stub = './stubs/config.stub';

    protected $extension = '.yml';
}
