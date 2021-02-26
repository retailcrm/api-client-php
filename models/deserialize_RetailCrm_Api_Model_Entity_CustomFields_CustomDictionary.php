<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomFields_CustomDictionary(array $jsonData): RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary
{
    
$model = new RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['elements'])) {
    $model->elements = [];
foreach (array_keys($jsonData['elements']) as $index21) {
    
$model->elements[$index21] = new RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement();
if (isset($jsonData['elements'][$index21]['name'])) {
    $model->elements[$index21]->name = $jsonData['elements'][$index21]['name'];

}
if (isset($jsonData['elements'][$index21]['code'])) {
    $model->elements[$index21]->code = $jsonData['elements'][$index21]['code'];

}
if (isset($jsonData['elements'][$index21]['ordering'])) {
    $model->elements[$index21]->ordering = $jsonData['elements'][$index21]['ordering'];

}


}

}



    return $model;
}
