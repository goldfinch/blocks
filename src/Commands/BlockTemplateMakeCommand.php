<?php

namespace Goldfinch\Blocks\Commands;

use Goldfinch\Taz\Console\GeneratorCommand;

#[AsCommand(name: 'make:block-template')]
class BlockTemplateMakeCommand extends GeneratorCommand
{
    protected static $defaultName = 'make:block-template';

    protected $description = 'Create block template';

    protected $path = 'themes/[theme]/templates/[namespace_root]/Blocks';

    protected $type = 'block template';

    protected $stub = 'block-template.stub';

    protected $suffix = 'Block';

    protected $extension = '.ss';
}
