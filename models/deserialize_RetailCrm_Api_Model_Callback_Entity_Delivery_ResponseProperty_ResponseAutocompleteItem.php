<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ResponseProperty_ResponseAutocompleteItem(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseAutocompleteItem
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseAutocompleteItem();
if (isset($jsonData['value'])) {
    $model->value = $jsonData['value'];

}
if (isset($jsonData['label'])) {
    $model->label = $jsonData['label'];

}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}



    return $model;
}
