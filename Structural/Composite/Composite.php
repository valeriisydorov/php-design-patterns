<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Composite;

class Composite extends Component
{
    /**
     * @var \SplObjectStorage
     */
    protected $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    /**
     * @param Component $component
     * @return void
     */
    public function add(Component $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    /**
     * @param Component $component
     * @return void
     */
    public function remove(Component $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }

        return "Branch(" . implode(" + ", $results) . ")";
    }
}
