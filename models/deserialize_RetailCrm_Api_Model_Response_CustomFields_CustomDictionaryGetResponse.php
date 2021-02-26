<?php

function deserialize_RetailCrm_Api_Model_Response_CustomFields_CustomDictionaryGetResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['customDictionary'])) {
    
$model->customDictionary = new RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary();
if (isset($jsonData['customDictionary']['name'])) {
    $model->customDictionary->name = $jsonData['customDictionary']['name'];

}
if (isset($jsonData['customDictionary']['code'])) {
    $model->customDictionary->code = $jsonData['customDictionary']['code'];

}
if (isset($jsonData['customDictionary']['elements'])) {
    $model->customDictionary->elements = [];
foreach (array_keys($jsonData['customDictionary']['elements']) as $index41) {
    
$model->customDictionary->elements[$index41] = new RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement();
if (isset($jsonData['customDictionary']['elements'][$index41]['name'])) {
    $model->customDictionary->elements[$index41]->name = $jsonData['customDictionary']['elements'][$index41]['name'];

}
if (isset($jsonData['customDictionary']['elements'][$index41]['code'])) {
    $model->customDictionary->elements[$index41]->code = $jsonData['customDictionary']['elements'][$index41]['code'];

}
if (isset($jsonData['customDictionary']['elements'][$index41]['ordering'])) {
    $model->customDictionary->elements[$index41]->ordering = $jsonData['customDictionary']['elements'][$index41]['ordering'];

}


}

}


}



    return $model;
}
