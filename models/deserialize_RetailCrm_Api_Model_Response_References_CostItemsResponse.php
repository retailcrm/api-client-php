<?php

function deserialize_RetailCrm_Api_Model_Response_References_CostItemsResponse(array $jsonData): RetailCrm\Api\Model\Response\References\CostItemsResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\CostItemsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['costItems'])) {
    $model->costItems = [];
foreach (array_keys($jsonData['costItems']) as $index22) {
    
$model->costItems[$index22] = new RetailCrm\Api\Model\Entity\References\CostItem();
if (isset($jsonData['costItems'][$index22]['source'])) {
    
$model->costItems[$index22]->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['costItems'][$index22]['source']['source'])) {
    $model->costItems[$index22]->source->source = $jsonData['costItems'][$index22]['source']['source'];

}
if (isset($jsonData['costItems'][$index22]['source']['medium'])) {
    $model->costItems[$index22]->source->medium = $jsonData['costItems'][$index22]['source']['medium'];

}
if (isset($jsonData['costItems'][$index22]['source']['campaign'])) {
    $model->costItems[$index22]->source->campaign = $jsonData['costItems'][$index22]['source']['campaign'];

}
if (isset($jsonData['costItems'][$index22]['source']['keyword'])) {
    $model->costItems[$index22]->source->keyword = $jsonData['costItems'][$index22]['source']['keyword'];

}
if (isset($jsonData['costItems'][$index22]['source']['content'])) {
    $model->costItems[$index22]->source->content = $jsonData['costItems'][$index22]['source']['content'];

}


}
if (isset($jsonData['costItems'][$index22]['code'])) {
    $model->costItems[$index22]->code = $jsonData['costItems'][$index22]['code'];

}
if (isset($jsonData['costItems'][$index22]['name'])) {
    $model->costItems[$index22]->name = $jsonData['costItems'][$index22]['name'];

}
if (isset($jsonData['costItems'][$index22]['group'])) {
    $model->costItems[$index22]->group = $jsonData['costItems'][$index22]['group'];

}
if (isset($jsonData['costItems'][$index22]['ordering'])) {
    $model->costItems[$index22]->ordering = $jsonData['costItems'][$index22]['ordering'];

}
if (isset($jsonData['costItems'][$index22]['active'])) {
    $model->costItems[$index22]->active = $jsonData['costItems'][$index22]['active'];

}
if (isset($jsonData['costItems'][$index22]['appliesToOrders'])) {
    $model->costItems[$index22]->appliesToOrders = $jsonData['costItems'][$index22]['appliesToOrders'];

}
if (isset($jsonData['costItems'][$index22]['type'])) {
    $model->costItems[$index22]->type = $jsonData['costItems'][$index22]['type'];

}
if (isset($jsonData['costItems'][$index22]['appliesToUsers'])) {
    $model->costItems[$index22]->appliesToUsers = $jsonData['costItems'][$index22]['appliesToUsers'];

}


}

}



    return $model;
}
