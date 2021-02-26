<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_MarketplaceData(array $jsonData): RetailCrm\Api\Model\Entity\Order\MarketplaceData
{
    
$model = new RetailCrm\Api\Model\Entity\Order\MarketplaceData();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['orderId'])) {
    $model->orderId = $jsonData['orderId'];

}



    return $model;
}
