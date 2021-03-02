<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_Items_PriceType(array $jsonData): RetailCrm\Api\Model\Entity\Orders\Items\PriceType
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\Items\PriceType();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
