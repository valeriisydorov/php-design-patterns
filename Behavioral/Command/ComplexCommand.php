<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command;

class ComplexCommand implements Command
{
    /**
     * @var Receiver
     */
    private Receiver $receiver;

    /**
     * @var string
     */
    private $a;

    /**
     * @var string
     */
    private $b;

    /**
     * @param Receiver $receiver
     * @param string $a
     * @param string $b
     */
    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        echo 'ComplexCommand: Complex stuff should be done by a receiver object.' . PHP_EOL;
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}
