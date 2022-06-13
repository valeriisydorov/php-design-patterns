<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

class Receiver
{
    /**
     * @param string $a
     * @return void
     */
    public function doSomething(string $a): void
    {
        echo "Receiver: Working on ({$a}.)" . PHP_EOL;
    }

    /**
     * @param string $b
     * @return void
     */
    public function doSomethingElse(string $b): void
    {
        echo "Receiver: Also working on ({$b}.)" . PHP_EOL;
    }
}
