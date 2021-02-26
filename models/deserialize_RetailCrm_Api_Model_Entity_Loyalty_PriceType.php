<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_PriceType(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\PriceType
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\PriceType();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
