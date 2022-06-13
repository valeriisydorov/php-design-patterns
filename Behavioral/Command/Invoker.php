<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

class Invoker
{
    /**
     * @var Command
     */
    private Command $onStart;

    /**
     * @var Command
     */
    private Command $onFinish;

    /**
     * @param Command $command
     * @return void
     */
    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

    /**
     * @param Command $command
     * @return void
     */
    public function setOnFinish(Command $command): void
    {
        $this->onFinish = $command;
    }

    /**
     * @return void
     */
    public function doSomethingImportant(): void
    {
        echo 'Invoker: Does anybody want something done before I begin?' . PHP_EOL;
        $this->onStart->execute();
        echo 'Invoker: ...doing something really important...' . PHP_EOL;
        echo 'Invoker: Does anybody want something done after I finish?' . PHP_EOL;
        $this->onFinish->execute();
    }
}
