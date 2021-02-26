<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_Delivery_CourierPhone(array $jsonData): RetailCrm\Api\Model\Entity\Order\Delivery\CourierPhone
{
    
$model = new RetailCrm\Api\Model\Entity\Order\Delivery\CourierPhone();
if (isset($jsonData['number'])) {
    $model->number = $jsonData['number'];

}



    return $model;
}
