<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2015 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

final class Ess_M2ePro_Model_Amazon_Synchronization_Defaults
    extends Ess_M2ePro_Model_Amazon_Synchronization_Abstract
{
    //########################################

    protected function getType()
    {
        return Ess_M2ePro_Model_Synchronization_Task_Abstract::DEFAULTS;
    }

    protected function getNick()
    {
        return NULL;
    }

    // ---------------------------------------

    protected function getPercentsStart()
    {
        return 0;
    }

    protected function getPercentsEnd()
    {
        return 100;
    }

    //########################################

    protected function performActions()
    {
        $result = true;

        $result = !$this->processTask('Defaults_RunParentProcessors') ? false : $result;
        $result = !$this->processTask('Defaults_UpdateDefectedListingsProducts') ? false : $result;
        $result = !$this->processTask('Defaults_UpdateListingsProducts') ? false : $result;

        return $result;
    }

    //########################################
}