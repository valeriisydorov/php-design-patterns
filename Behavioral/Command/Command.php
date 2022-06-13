<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

interface Command
{
    /**
     * @return void
     */
    public function execute(): void;
}
