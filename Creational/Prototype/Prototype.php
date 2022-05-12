<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype;

class Prototype
{
    /**
     * @var
     */
    public $primitive;

    /**
     * @var
     */
    public $component;

    /**
     * @var
     */
    public $circularReference;

    /**
     * @return void
     */
    public function __clone()
    {
        $this->component = clone $this->component;

        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }
}
