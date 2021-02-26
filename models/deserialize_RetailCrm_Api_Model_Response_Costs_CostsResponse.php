<?php

function deserialize_RetailCrm_Api_Model_Response_Costs_CostsResponse(array $jsonData): RetailCrm\Api\Model\Response\Costs\CostsResponse
{
    
$model = new RetailCrm\Api\Model\Response\Costs\CostsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['pagination'])) {
    
$model->pagination = new RetailCrm\Api\Model\Entity\Pagination();
if (isset($jsonData['pagination']['limit'])) {
    $model->pagination->limit = $jsonData['pagination']['limit'];

}
if (isset($jsonData['pagination']['totalCount'])) {
    $model->pagination->totalCount = $jsonData['pagination']['totalCount'];

}
if (isset($jsonData['pagination']['currentPage'])) {
    $model->pagination->currentPage = $jsonData['pagination']['currentPage'];

}
if (isset($jsonData['pagination']['totalPageCount'])) {
    $model->pagination->totalPageCount = $jsonData['pagination']['totalPageCount'];

}


}
if (isset($jsonData['costs'])) {
    $model->costs = [];
foreach (array_keys($jsonData['costs']) as $index18) {
    
$model->costs[$index18] = new RetailCrm\Api\Model\Entity\Costs\Cost();
if (isset($jsonData['costs'][$index18]['source'])) {
    
$model->costs[$index18]->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['costs'][$index18]['source']['source'])) {
    $model->costs[$index18]->source->source = $jsonData['costs'][$index18]['source']['source'];

}
if (isset($jsonData['costs'][$index18]['source']['medium'])) {
    $model->costs[$index18]->source->medium = $jsonData['costs'][$index18]['source']['medium'];

}
if (isset($jsonData['costs'][$index18]['source']['campaign'])) {
    $model->costs[$index18]->source->campaign = $jsonData['costs'][$index18]['source']['campaign'];

}
if (isset($jsonData['costs'][$index18]['source']['keyword'])) {
    $model->costs[$index18]->source->keyword = $jsonData['costs'][$index18]['source']['keyword'];

}
if (isset($jsonData['costs'][$index18]['source']['content'])) {
    $model->costs[$index18]->source->content = $jsonData['costs'][$index18]['source']['content'];

}


}
if (isset($jsonData['costs'][$index18]['id'])) {
    $model->costs[$index18]->id = $jsonData['costs'][$index18]['id'];

}
if (isset($jsonData['costs'][$index18]['dateFrom'])) {
    $model->costs[$index18]->dateFrom = \DateTime::createFromFormat('Y-m-d', $jsonData['costs'][$index18]['dateFrom']);

}
if (isset($jsonData['costs'][$index18]['dateTo'])) {
    $model->costs[$index18]->dateTo = \DateTime::createFromFormat('Y-m-d', $jsonData['costs'][$index18]['dateTo']);

}
if (isset($jsonData['costs'][$index18]['summ'])) {
    $model->costs[$index18]->summ = (float) $jsonData['costs'][$index18]['summ'];

}
if (isset($jsonData['costs'][$index18]['costItem'])) {
    $model->costs[$index18]->costItem = $jsonData['costs'][$index18]['costItem'];

}
if (isset($jsonData['costs'][$index18]['comment'])) {
    $model->costs[$index18]->comment = $jsonData['costs'][$index18]['comment'];

}
if (isset($jsonData['costs'][$index18]['createdAt'])) {
    $model->costs[$index18]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['costs'][$index18]['createdAt']);

}
if (isset($jsonData['costs'][$index18]['createdBy'])) {
    $model->costs[$index18]->createdBy = $jsonData['costs'][$index18]['createdBy'];

}
if (isset($jsonData['costs'][$index18]['order'])) {
    
$model->costs[$index18]->order = new RetailCrm\Api\Model\Entity\Costs\CostOrder();
if (isset($jsonData['costs'][$index18]['order']['id'])) {
    $model->costs[$index18]->order->id = $jsonData['costs'][$index18]['order']['id'];

}
if (isset($jsonData['costs'][$index18]['order']['number'])) {
    $model->costs[$index18]->order->number = $jsonData['costs'][$index18]['order']['number'];

}
if (isset($jsonData['costs'][$index18]['order']['externalId'])) {
    $model->costs[$index18]->order->externalId = $jsonData['costs'][$index18]['order']['externalId'];

}


}
if (isset($jsonData['costs'][$index18]['userId'])) {
    $model->costs[$index18]->userId = $jsonData['costs'][$index18]['userId'];

}
if (isset($jsonData['costs'][$index18]['sites'])) {
    $model->costs[$index18]->sites = $jsonData['costs'][$index18]['sites'];

}


}

}



    return $model;
}
