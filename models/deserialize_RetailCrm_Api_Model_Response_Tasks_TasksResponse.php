<?php

function deserialize_RetailCrm_Api_Model_Response_Tasks_TasksResponse(array $jsonData): RetailCrm\Api\Model\Response\Tasks\TasksResponse
{
    
$model = new RetailCrm\Api\Model\Response\Tasks\TasksResponse();
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
if (isset($jsonData['tasks'])) {
    $model->tasks = [];
foreach (array_keys($jsonData['tasks']) as $index18) {
    
$model->tasks[$index18] = new RetailCrm\Api\Model\Entity\Tasks\Task();
if (isset($jsonData['tasks'][$index18]['id'])) {
    $model->tasks[$index18]->id = $jsonData['tasks'][$index18]['id'];

}
if (isset($jsonData['tasks'][$index18]['text'])) {
    $model->tasks[$index18]->text = $jsonData['tasks'][$index18]['text'];

}
if (isset($jsonData['tasks'][$index18]['commentary'])) {
    $model->tasks[$index18]->commentary = $jsonData['tasks'][$index18]['commentary'];

}
if (isset($jsonData['tasks'][$index18]['datetime'])) {
    $model->tasks[$index18]->datetime = \DateTime::createFromFormat('Y-m-d H:i', $jsonData['tasks'][$index18]['datetime']);

}
if (isset($jsonData['tasks'][$index18]['createdAt'])) {
    $model->tasks[$index18]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['tasks'][$index18]['createdAt']);

}
if (isset($jsonData['tasks'][$index18]['complete'])) {
    $model->tasks[$index18]->complete = $jsonData['tasks'][$index18]['complete'];

}
if (isset($jsonData['tasks'][$index18]['creator'])) {
    $model->tasks[$index18]->creator = $jsonData['tasks'][$index18]['creator'];

}
if (isset($jsonData['tasks'][$index18]['performer'])) {
    $model->tasks[$index18]->performer = $jsonData['tasks'][$index18]['performer'];

}
if (isset($jsonData['tasks'][$index18]['performerId'])) {
    $model->tasks[$index18]->performerId = $jsonData['tasks'][$index18]['performerId'];

}
if (isset($jsonData['tasks'][$index18]['performerType'])) {
    $model->tasks[$index18]->performerType = $jsonData['tasks'][$index18]['performerType'];

}
if (isset($jsonData['tasks'][$index18]['customer'])) {
    
$model->tasks[$index18]->customer = new RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer();
if (isset($jsonData['tasks'][$index18]['customer']['type'])) {
    $model->tasks[$index18]->customer->type = $jsonData['tasks'][$index18]['customer']['type'];

}
if (isset($jsonData['tasks'][$index18]['customer']['id'])) {
    $model->tasks[$index18]->customer->id = $jsonData['tasks'][$index18]['customer']['id'];

}
if (isset($jsonData['tasks'][$index18]['customer']['externalId'])) {
    $model->tasks[$index18]->customer->externalId = $jsonData['tasks'][$index18]['customer']['externalId'];

}
if (isset($jsonData['tasks'][$index18]['customer']['site'])) {
    $model->tasks[$index18]->customer->site = $jsonData['tasks'][$index18]['customer']['site'];

}


}
if (isset($jsonData['tasks'][$index18]['order'])) {
    
$model->tasks[$index18]->order = new RetailCrm\Api\Model\Entity\Tasks\Order();
if (isset($jsonData['tasks'][$index18]['order']['id'])) {
    $model->tasks[$index18]->order->id = $jsonData['tasks'][$index18]['order']['id'];

}
if (isset($jsonData['tasks'][$index18]['order']['number'])) {
    $model->tasks[$index18]->order->number = $jsonData['tasks'][$index18]['order']['number'];

}
if (isset($jsonData['tasks'][$index18]['order']['externalId'])) {
    $model->tasks[$index18]->order->externalId = $jsonData['tasks'][$index18]['order']['externalId'];

}
if (isset($jsonData['tasks'][$index18]['order']['site'])) {
    $model->tasks[$index18]->order->site = $jsonData['tasks'][$index18]['order']['site'];

}


}
if (isset($jsonData['tasks'][$index18]['phone'])) {
    $model->tasks[$index18]->phone = $jsonData['tasks'][$index18]['phone'];

}
if (isset($jsonData['tasks'][$index18]['phoneSite'])) {
    $model->tasks[$index18]->phoneSite = $jsonData['tasks'][$index18]['phoneSite'];

}
if (isset($jsonData['tasks'][$index18]['completedAt'])) {
    $model->tasks[$index18]->completedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['tasks'][$index18]['completedAt']);

}


}

}



    return $model;
}
