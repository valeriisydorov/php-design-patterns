<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\Observer;


include_once 'ObserverInterface.php';


class ObserverOne implements ObserverInterface
{
    /**
     * @param Observable $observable
     */
    public function update(Observable $observable): void
    {
        echo "ObserverOne: Observable changed status to {$observable->status}!\n";
    }
}
