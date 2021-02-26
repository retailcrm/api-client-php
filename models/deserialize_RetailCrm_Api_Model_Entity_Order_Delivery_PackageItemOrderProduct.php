<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_Delivery_PackageItemOrderProduct(array $jsonData): RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct
{
    
$model = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['externalIds'])) {
    $model->externalIds = [];
foreach (array_keys($jsonData['externalIds']) as $index24) {
    
$model->externalIds[$index24] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['externalIds'][$index24]['code'])) {
    $model->externalIds[$index24]->code = $jsonData['externalIds'][$index24]['code'];

}
if (isset($jsonData['externalIds'][$index24]['value'])) {
    $model->externalIds[$index24]->value = $jsonData['externalIds'][$index24]['value'];

}


}

}



    return $model;
}
