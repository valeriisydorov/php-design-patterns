<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\Observer;


include_once 'ObserverInterface.php';


class ObserverTwo implements ObserverInterface
{
    /**
     * @param Observable $observable
     */
    public function update(Observable $observable): void
    {
        echo "ObserverTwo: Observable changed status to {$observable->status}.\n";
    }
}
