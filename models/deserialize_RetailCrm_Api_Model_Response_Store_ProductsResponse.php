<?php

function deserialize_RetailCrm_Api_Model_Response_Store_ProductsResponse(array $jsonData): RetailCrm\Api\Model\Response\Store\ProductsResponse
{
    
$model = new RetailCrm\Api\Model\Response\Store\ProductsResponse();
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
if (isset($jsonData['products'])) {
    $model->products = [];
foreach (array_keys($jsonData['products']) as $index21) {
    
$model->products[$index21] = new RetailCrm\Api\Model\Entity\Store\Product();
if (isset($jsonData['products'][$index21]['minPrice'])) {
    $model->products[$index21]->minPrice = (float) $jsonData['products'][$index21]['minPrice'];

}
if (isset($jsonData['products'][$index21]['maxPrice'])) {
    $model->products[$index21]->maxPrice = (float) $jsonData['products'][$index21]['maxPrice'];

}
if (isset($jsonData['products'][$index21]['id'])) {
    $model->products[$index21]->id = $jsonData['products'][$index21]['id'];

}
if (isset($jsonData['products'][$index21]['article'])) {
    $model->products[$index21]->article = $jsonData['products'][$index21]['article'];

}
if (isset($jsonData['products'][$index21]['name'])) {
    $model->products[$index21]->name = $jsonData['products'][$index21]['name'];

}
if (isset($jsonData['products'][$index21]['url'])) {
    $model->products[$index21]->url = $jsonData['products'][$index21]['url'];

}
if (isset($jsonData['products'][$index21]['imageUrl'])) {
    $model->products[$index21]->imageUrl = $jsonData['products'][$index21]['imageUrl'];

}
if (isset($jsonData['products'][$index21]['description'])) {
    $model->products[$index21]->description = $jsonData['products'][$index21]['description'];

}
if (isset($jsonData['products'][$index21]['popular'])) {
    $model->products[$index21]->popular = $jsonData['products'][$index21]['popular'];

}
if (isset($jsonData['products'][$index21]['stock'])) {
    $model->products[$index21]->stock = $jsonData['products'][$index21]['stock'];

}
if (isset($jsonData['products'][$index21]['novelty'])) {
    $model->products[$index21]->novelty = $jsonData['products'][$index21]['novelty'];

}
if (isset($jsonData['products'][$index21]['recommended'])) {
    $model->products[$index21]->recommended = $jsonData['products'][$index21]['recommended'];

}
if (isset($jsonData['products'][$index21]['properties'])) {
    $model->products[$index21]->properties = [];
foreach (array_keys($jsonData['products'][$index21]['properties']) as $index45) {
    $model->products[$index21]->properties[$index45] = $jsonData['products'][$index21]['properties'][$index45];

}

}
if (isset($jsonData['products'][$index21]['groups'])) {
    $model->products[$index21]->groups = [];
foreach (array_keys($jsonData['products'][$index21]['groups']) as $index41) {
    
$model->products[$index21]->groups[$index41] = new RetailCrm\Api\Model\Entity\FixExternalRow();
if (isset($jsonData['products'][$index21]['groups'][$index41]['id'])) {
    $model->products[$index21]->groups[$index41]->id = $jsonData['products'][$index21]['groups'][$index41]['id'];

}
if (isset($jsonData['products'][$index21]['groups'][$index41]['externalId'])) {
    $model->products[$index21]->groups[$index41]->externalId = $jsonData['products'][$index21]['groups'][$index41]['externalId'];

}


}

}
if (isset($jsonData['products'][$index21]['externalId'])) {
    $model->products[$index21]->externalId = $jsonData['products'][$index21]['externalId'];

}
if (isset($jsonData['products'][$index21]['manufacturer'])) {
    $model->products[$index21]->manufacturer = $jsonData['products'][$index21]['manufacturer'];

}
if (isset($jsonData['products'][$index21]['offers'])) {
    $model->products[$index21]->offers = [];
foreach (array_keys($jsonData['products'][$index21]['offers']) as $index41) {
    
$model->products[$index21]->offers[$index41] = new RetailCrm\Api\Model\Entity\Store\ProductOffer();
if (isset($jsonData['products'][$index21]['offers'][$index41]['name'])) {
    $model->products[$index21]->offers[$index41]->name = $jsonData['products'][$index21]['offers'][$index41]['name'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['price'])) {
    $model->products[$index21]->offers[$index41]->price = (float) $jsonData['products'][$index21]['offers'][$index41]['price'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['images'])) {
    $model->products[$index21]->offers[$index41]->images = $jsonData['products'][$index21]['offers'][$index41]['images'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['id'])) {
    $model->products[$index21]->offers[$index41]->id = $jsonData['products'][$index21]['offers'][$index41]['id'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['externalId'])) {
    $model->products[$index21]->offers[$index41]->externalId = $jsonData['products'][$index21]['offers'][$index41]['externalId'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['xmlId'])) {
    $model->products[$index21]->offers[$index41]->xmlId = $jsonData['products'][$index21]['offers'][$index41]['xmlId'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['article'])) {
    $model->products[$index21]->offers[$index41]->article = $jsonData['products'][$index21]['offers'][$index41]['article'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['prices'])) {
    $model->products[$index21]->offers[$index41]->prices = [];
foreach (array_keys($jsonData['products'][$index21]['offers'][$index41]['prices']) as $index61) {
    
$model->products[$index21]->offers[$index41]->prices[$index61] = new RetailCrm\Api\Model\Entity\Store\OfferPrice();
if (isset($jsonData['products'][$index21]['offers'][$index41]['prices'][$index61]['priceType'])) {
    $model->products[$index21]->offers[$index41]->prices[$index61]->priceType = $jsonData['products'][$index21]['offers'][$index41]['prices'][$index61]['priceType'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['prices'][$index61]['price'])) {
    $model->products[$index21]->offers[$index41]->prices[$index61]->price = (float) $jsonData['products'][$index21]['offers'][$index41]['prices'][$index61]['price'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['prices'][$index61]['ordering'])) {
    $model->products[$index21]->offers[$index41]->prices[$index61]->ordering = $jsonData['products'][$index21]['offers'][$index41]['prices'][$index61]['ordering'];

}


}

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['purchasePrice'])) {
    $model->products[$index21]->offers[$index41]->purchasePrice = (float) $jsonData['products'][$index21]['offers'][$index41]['purchasePrice'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['vatRate'])) {
    $model->products[$index21]->offers[$index41]->vatRate = $jsonData['products'][$index21]['offers'][$index41]['vatRate'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['properties'])) {
    $model->products[$index21]->offers[$index41]->properties = [];
foreach (array_keys($jsonData['products'][$index21]['offers'][$index41]['properties']) as $index65) {
    $model->products[$index21]->offers[$index41]->properties[$index65] = $jsonData['products'][$index21]['offers'][$index41]['properties'][$index65];

}

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['quantity'])) {
    $model->products[$index21]->offers[$index41]->quantity = (float) $jsonData['products'][$index21]['offers'][$index41]['quantity'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['weight'])) {
    $model->products[$index21]->offers[$index41]->weight = (float) $jsonData['products'][$index21]['offers'][$index41]['weight'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['length'])) {
    $model->products[$index21]->offers[$index41]->length = (float) $jsonData['products'][$index21]['offers'][$index41]['length'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['width'])) {
    $model->products[$index21]->offers[$index41]->width = (float) $jsonData['products'][$index21]['offers'][$index41]['width'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['height'])) {
    $model->products[$index21]->offers[$index41]->height = (float) $jsonData['products'][$index21]['offers'][$index41]['height'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['active'])) {
    $model->products[$index21]->offers[$index41]->active = $jsonData['products'][$index21]['offers'][$index41]['active'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['unit'])) {
    
$model->products[$index21]->offers[$index41]->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['products'][$index21]['offers'][$index41]['unit']['code'])) {
    $model->products[$index21]->offers[$index41]->unit->code = $jsonData['products'][$index21]['offers'][$index41]['unit']['code'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['unit']['name'])) {
    $model->products[$index21]->offers[$index41]->unit->name = $jsonData['products'][$index21]['offers'][$index41]['unit']['name'];

}
if (isset($jsonData['products'][$index21]['offers'][$index41]['unit']['sym'])) {
    $model->products[$index21]->offers[$index41]->unit->sym = $jsonData['products'][$index21]['offers'][$index41]['unit']['sym'];

}


}
if (isset($jsonData['products'][$index21]['offers'][$index41]['barcode'])) {
    $model->products[$index21]->offers[$index41]->barcode = $jsonData['products'][$index21]['offers'][$index41]['barcode'];

}


}

}
if (isset($jsonData['products'][$index21]['active'])) {
    $model->products[$index21]->active = $jsonData['products'][$index21]['active'];

}
if (isset($jsonData['products'][$index21]['quantity'])) {
    $model->products[$index21]->quantity = (float) $jsonData['products'][$index21]['quantity'];

}
if (isset($jsonData['products'][$index21]['markable'])) {
    $model->products[$index21]->markable = $jsonData['products'][$index21]['markable'];

}


}

}



    return $model;
}
