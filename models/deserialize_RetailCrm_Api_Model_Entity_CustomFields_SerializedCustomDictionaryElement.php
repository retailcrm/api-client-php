<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomFields_SerializedCustomDictionaryElement(array $jsonData): RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement
{
    
$model = new RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['ordering'])) {
    $model->ordering = $jsonData['ordering'];

}



    return $model;
}
