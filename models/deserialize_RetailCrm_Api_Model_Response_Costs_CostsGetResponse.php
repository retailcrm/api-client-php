<?php

function deserialize_RetailCrm_Api_Model_Response_Costs_CostsGetResponse(array $jsonData): RetailCrm\Api\Model\Response\Costs\CostsGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\Costs\CostsGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['cost'])) {
    
$model->cost = new RetailCrm\Api\Model\Entity\Costs\Cost();
if (isset($jsonData['cost']['source'])) {
    
$model->cost->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['cost']['source']['source'])) {
    $model->cost->source->source = $jsonData['cost']['source']['source'];

}
if (isset($jsonData['cost']['source']['medium'])) {
    $model->cost->source->medium = $jsonData['cost']['source']['medium'];

}
if (isset($jsonData['cost']['source']['campaign'])) {
    $model->cost->source->campaign = $jsonData['cost']['source']['campaign'];

}
if (isset($jsonData['cost']['source']['keyword'])) {
    $model->cost->source->keyword = $jsonData['cost']['source']['keyword'];

}
if (isset($jsonData['cost']['source']['content'])) {
    $model->cost->source->content = $jsonData['cost']['source']['content'];

}


}
if (isset($jsonData['cost']['id'])) {
    $model->cost->id = $jsonData['cost']['id'];

}
if (isset($jsonData['cost']['dateFrom'])) {
    $model->cost->dateFrom = \DateTime::createFromFormat('Y-m-d', $jsonData['cost']['dateFrom']);

}
if (isset($jsonData['cost']['dateTo'])) {
    $model->cost->dateTo = \DateTime::createFromFormat('Y-m-d', $jsonData['cost']['dateTo']);

}
if (isset($jsonData['cost']['summ'])) {
    $model->cost->summ = (float) $jsonData['cost']['summ'];

}
if (isset($jsonData['cost']['costItem'])) {
    $model->cost->costItem = $jsonData['cost']['costItem'];

}
if (isset($jsonData['cost']['comment'])) {
    $model->cost->comment = $jsonData['cost']['comment'];

}
if (isset($jsonData['cost']['createdAt'])) {
    $model->cost->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['cost']['createdAt']);

}
if (isset($jsonData['cost']['createdBy'])) {
    $model->cost->createdBy = $jsonData['cost']['createdBy'];

}
if (isset($jsonData['cost']['order'])) {
    
$model->cost->order = new RetailCrm\Api\Model\Entity\Costs\CostOrder();
if (isset($jsonData['cost']['order']['id'])) {
    $model->cost->order->id = $jsonData['cost']['order']['id'];

}
if (isset($jsonData['cost']['order']['number'])) {
    $model->cost->order->number = $jsonData['cost']['order']['number'];

}
if (isset($jsonData['cost']['order']['externalId'])) {
    $model->cost->order->externalId = $jsonData['cost']['order']['externalId'];

}


}
if (isset($jsonData['cost']['userId'])) {
    $model->cost->userId = $jsonData['cost']['userId'];

}
if (isset($jsonData['cost']['sites'])) {
    $model->cost->sites = $jsonData['cost']['sites'];

}


}



    return $model;
}
