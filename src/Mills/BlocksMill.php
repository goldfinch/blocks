<?php

namespace Goldfinch\Blocks\Mills;

use Goldfinch\Mill\Mill;

class BlocksMill extends Mill
{
    public function factory(): array
    {
        return [
            'Title' => $this->faker->catchPhrase(),
            'Content' => $this->faker->paragraph(20),
        ];
    }
}
