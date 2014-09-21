<?php

/**
 *
 * Test.php
 *
 * @author  sven
 * @created 09/21/2014 13:49
 */
class Mageflow_Queue_Model_Handler_Test extends Lilmuckers_Queue_Model_Queue_Abstract
{
    public function run()
    {
        Mage::log(__METHOD__);
    }
} 