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

    protected $suffix = 'Block';

    protected function execute($input, $output): int
    {
        if (parent::execute($input, $output) === false) {
            return Command::FAILURE;
        }

        $className = 'Goldfinch\Blocks\Pages\Blocks'; // $this->askClassNameQuestion('What [class name] does this block need to be assigned to? (eg: Page, App\Pages\Page)', $input, $output);

        $nameInput = $this->getAttrName($input);

        // create page template
        $command = $this->getApplication()->find('make:block-template');
        $command->run(new ArrayInput(['name' => $nameInput]), $output);

        // find config
        $config = $this->findYamlConfigFileByName('app-blocks');

        // create new config if not exists
        if (!$config) {

            $command = $this->getApplication()->find('make:config');
            $command->run(new ArrayInput([
                'name' => 'blocks',
                '--plain' => true,
                '--after' => 'goldfinch/blocks',
                '--nameprefix' => 'app-',
            ]), $output);

            $config = $this->findYamlConfigFileByName('app-blocks');
        }

        // update config
        $this->updateYamlConfig(
            $config,
            $className . '.allowed_elements',
            [$this->getNamespaceClass($input)],
        );

        return Command::SUCCESS;
    }
}
