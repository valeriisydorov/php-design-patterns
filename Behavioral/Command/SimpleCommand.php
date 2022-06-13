<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

class SimpleCommand implements Command
{
    /**
     * @var string
     */
    private string $payload;

    /**
     * @param string $payload
     */
    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        echo "SimpleCommand: See, I can do simple things like printing ({$this->payload}.)" . PHP_EOL;
    }
}
