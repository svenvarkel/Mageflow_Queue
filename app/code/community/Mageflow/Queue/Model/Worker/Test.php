<?php

/**
 *
 * @author  sven
 * @created 09/21/2014 14:18
 */
class Mageflow_Queue_Model_Worker_Test extends Lilmuckers_Queue_Model_Worker_Abstract
    implements Lilmuckers_Queue_Interfaces_Worker
{

    public function run(Lilmuckers_Queue_Model_Queue_Task $task)
    {
        Mage::log(__METHOD__);
        $data = $task->getData();
        Mage::log(print_r($data, true));
        $task->success();
    }
}
