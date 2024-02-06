<?php

namespace Goldfinch\Blocks\Commands;

use Goldfinch\Taz\Console\GeneratorCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;

#[AsCommand(name: 'make:block')]
class BlockMakeCommand extends GeneratorCommand
{
    protected static $defaultName = 'make:block';

    protected $description = 'Create block [BlockElement]';

    protected $path = '[psr4]/Blocks';

    protected $type = 'block';

    protected $stub = 'block.stub';

    protected $prefix = 'Block';

    protected function execute($input, $output): int
    {
        parent::execute($input, $output);

        $nameInput = $this->getAttrName($input);

        // Create page template

        $command = $this->getApplication()->find('make:block-template');

        $arguments = [
            'name' => $nameInput,
        ];

        $greetInput = new ArrayInput($arguments);
        $returnCode = $command->run($greetInput, $output);

        // Register block

        $rootDir = $this->getNamespaceRootDir();

        $newContent = $this->addToLine(
            'app/_config/elements.yml',
            'allowed_elements:',
            '    - ' . $rootDir . '\Blocks\\' . $nameInput . 'Block',
        );

        file_put_contents('app/_config/elements.yml', $newContent);

        return Command::SUCCESS;
    }
}
