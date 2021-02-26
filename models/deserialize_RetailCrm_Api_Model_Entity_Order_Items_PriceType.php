<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_Items_PriceType(array $jsonData): RetailCrm\Api\Model\Entity\Order\Items\PriceType
{
    
$model = new RetailCrm\Api\Model\Entity\Order\Items\PriceType();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
