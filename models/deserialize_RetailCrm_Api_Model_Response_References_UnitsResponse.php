<?php

function deserialize_RetailCrm_Api_Model_Response_References_UnitsResponse(array $jsonData): RetailCrm\Api\Model\Response\References\UnitsResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\UnitsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['units'])) {
    $model->units = [];
foreach (array_keys($jsonData['units']) as $index18) {
    
$model->units[$index18] = new RetailCrm\Api\Model\Entity\References\SerializedUnit();
if (isset($jsonData['units'][$index18]['code'])) {
    $model->units[$index18]->code = $jsonData['units'][$index18]['code'];

}
if (isset($jsonData['units'][$index18]['name'])) {
    $model->units[$index18]->name = $jsonData['units'][$index18]['name'];

}
if (isset($jsonData['units'][$index18]['sym'])) {
    $model->units[$index18]->sym = $jsonData['units'][$index18]['sym'];

}
if (isset($jsonData['units'][$index18]['default'])) {
    $model->units[$index18]->default = $jsonData['units'][$index18]['default'];

}
if (isset($jsonData['units'][$index18]['active'])) {
    $model->units[$index18]->active = $jsonData['units'][$index18]['active'];

}


}

}



    return $model;
}
