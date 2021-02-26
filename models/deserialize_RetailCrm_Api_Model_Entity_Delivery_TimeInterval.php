<?php

function deserialize_RetailCrm_Api_Model_Entity_Delivery_TimeInterval(array $jsonData): RetailCrm\Api\Model\Entity\Delivery\TimeInterval
{
    
$model = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['from'])) {
    $model->from = \DateTime::createFromFormat('H:i', $jsonData['from']);

}
if (isset($jsonData['to'])) {
    $model->to = \DateTime::createFromFormat('H:i', $jsonData['to']);

}
if (isset($jsonData['custom'])) {
    $model->custom = $jsonData['custom'];

}



    return $model;
}
