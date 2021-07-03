<?php declare(strict_types=1);


namespace DesignPatterns\Behavioral\Observer;


use ReflectionClass;


include_once 'ObservableInterface.php';


/**
 * Class Observable
 * @package DesignPatterns\Behavioral\Observer
 */
class Observable implements ObservableInterface
{
    /**
     * @var
     */
    public $status;

    /**
     * @var string[]
     */
    private $statusArray = ['ToDo', 'In Progress', 'Done', 'Closed'];

    /**
     * @var array
     */
    private $observers = [];

    /**
     * @param ObserverInterface $observer
     * @return mixed|void
     */
    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
        $observerClass = new ReflectionClass($observer);
        echo "Observable: Attached {$observerClass->getShortName()}.\n";
    }

    /**
     * @param ObserverInterface $observer
     */
    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, function ($a) use ($observer) {
            return (!($observer === $a));
        });
        $observerClass = new ReflectionClass($observer);
        echo "Observable: Detached {$observerClass->getShortName()}.\n";
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observerClass = new ReflectionClass($observer);
            echo "Observable: Notifying {$observerClass->getShortName()}.\n";
            $observer->update($this);
        }
    }

    public function changeStatus(): void
    {
        $this->status = $this->statusArray[array_rand($this->statusArray)];
        echo "Observable: My status has just changed to: {$this->status}!\n";
        $this->notify();
    }
}
