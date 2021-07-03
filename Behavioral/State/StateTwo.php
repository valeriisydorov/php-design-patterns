<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\State;


/**
 * Class StateTwo
 * @package DesignPatterns\Behavioral\State
 */
class StateTwo implements StateInterface
{
    /**
     * @param Context $context
     */
    public function actionOne(Context $context): void
    {
        echo "StateTwo handles actionOne.\n";
    }

    /**
     * @param Context $context
     */
    public function actionTwo(Context $context): void
    {
        echo "StateTwo handles actionTwo and \n";
        $context->switchTo(new StateOne());
    }
}
