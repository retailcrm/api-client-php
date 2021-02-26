<?php

function deserialize_RetailCrm_Api_Model_Entity_Costs_Cost(array $jsonData): RetailCrm\Api\Model\Entity\Costs\Cost
{
    
$model = new RetailCrm\Api\Model\Entity\Costs\Cost();
if (isset($jsonData['source'])) {
    
$model->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['source']['source'])) {
    $model->source->source = $jsonData['source']['source'];

}
if (isset($jsonData['source']['medium'])) {
    $model->source->medium = $jsonData['source']['medium'];

}
if (isset($jsonData['source']['campaign'])) {
    $model->source->campaign = $jsonData['source']['campaign'];

}
if (isset($jsonData['source']['keyword'])) {
    $model->source->keyword = $jsonData['source']['keyword'];

}
if (isset($jsonData['source']['content'])) {
    $model->source->content = $jsonData['source']['content'];

}


}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['dateFrom'])) {
    $model->dateFrom = \DateTime::createFromFormat('Y-m-d', $jsonData['dateFrom']);

}
if (isset($jsonData['dateTo'])) {
    $model->dateTo = \DateTime::createFromFormat('Y-m-d', $jsonData['dateTo']);

}
if (isset($jsonData['summ'])) {
    $model->summ = (float) $jsonData['summ'];

}
if (isset($jsonData['costItem'])) {
    $model->costItem = $jsonData['costItem'];

}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['createdBy'])) {
    $model->createdBy = $jsonData['createdBy'];

}
if (isset($jsonData['order'])) {
    
$model->order = new RetailCrm\Api\Model\Entity\Costs\CostOrder();
if (isset($jsonData['order']['id'])) {
    $model->order->id = $jsonData['order']['id'];

}
if (isset($jsonData['order']['number'])) {
    $model->order->number = $jsonData['order']['number'];

}
if (isset($jsonData['order']['externalId'])) {
    $model->order->externalId = $jsonData['order']['externalId'];

}


}
if (isset($jsonData['userId'])) {
    $model->userId = $jsonData['userId'];

}
if (isset($jsonData['sites'])) {
    $model->sites = $jsonData['sites'];

}



    return $model;
}
