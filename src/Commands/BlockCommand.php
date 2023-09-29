<?php

namespace Goldfinch\Blocks\Commands;

use Goldfinch\Taz\Console\GeneratorCommand;
use Goldfinch\Taz\Services\InputOutput;
use Symfony\Component\Console\Command\Command;

#[AsCommand(name: 'make:block-gf')]
class BlockCommand extends GeneratorCommand
{
    protected static $defaultName = 'make:block-gf';

    protected $description = 'Create new block (GF)';

    protected $path = 'app/src/Blocks';

    protected $type = 'block';

    protected $stub = './stubs/block.stub';

    protected $prefix = 'Block';

    protected function execute($input, $output): int
    {
        parent::execute($input, $output);

        return Command::SUCCESS;
    }
}
