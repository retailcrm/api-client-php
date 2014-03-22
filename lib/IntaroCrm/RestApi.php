<?php
namespace IntaroCrm;

class RestApi
{
    protected $apiUrl;
    protected $apiKey;
    protected $apiVersion = '2';
    protected $generatedAt;

    protected $parameters;

    /**
     * @param string $crmUrl - адрес CRM
     * @param string $apiKey - ключ для работы с api
     */
    public function __construct($crmUrl, $apiKey)
    {
        $this->apiUrl = $crmUrl.'/api/v'.$this->apiVersion.'/';
        $this->apiKey = $apiKey;
        $this->parameters = array('apiKey' => $this->apiKey);
    }

    /* Методы для работы с заказами */
    /**
     * Получение заказа по id
     *
     * @param string $id - идентификатор заказа
     * @param string $by - поиск заказа по id или externalId
     * @return array - информация о заказе
     */
    public function orderGet($id, $by = 'externalId')
    {
        $url = $this->apiUrl.'orders/'.$id;

        if ($by != 'externalId')
            $this->parameters['by'] = $by;
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Создание заказа
     *
     * @param array $order- информация о заказе
     * @return array
     */
    public function orderCreate($order)
    {
        $dataJson = json_encode($order);
        $this->parameters['order'] = $dataJson;

        $url = $this->apiUrl.'orders/create';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }

    /**
     * Изменение заказа
     *
     * @param array $order- информация о заказе
     * @return array
     */
    public function orderEdit($order)
    {
        $dataJson = json_encode($order);
        $this->parameters['order'] = $dataJson;

        $url = $this->apiUrl.'orders/'.$order['externalId'].'/edit';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }

    /**
     * Пакетная загрузка заказов
     *
     * @param array $orders - массив заказов
     * @return array
     */
    public function orderUpload($orders)
    {
        $dataJson = json_encode($orders);
        $this->parameters['orders'] = $dataJson;

        $url = $this->apiUrl.'orders/upload';
        $result = $this->curlRequest($url, 'POST');
        if (is_null($result) && isset($result['uploadedOrders']))
            return $result['uploadedOrders'];
        return $result;
    }

    /**
     * Обновление externalId у заказов с переданными id
     *
     * @param array $orders- массив, содержащий id и externalId заказа
     * @return array
     */
    public function orderFixExternalIds($order)
    {
        $dataJson = json_encode($order);
        $this->parameters['orders'] = $dataJson;

        $url = $this->apiUrl.'orders/fix-external-ids';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }

    /**
     * Удаление заказа
     *
     * @param string $id - идентификатор заказа
     * @param string $by - поиск заказа по id или externalId
     * @return array
     */
    /*
    public function orderDelete($id, $by = 'externalId')
    {
        $url = $this->apiUrl.'orders/'.$id.'/delete';
        if ($by != 'externalId')
            $this->parameters['by'] = $by;
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }*/

    /**
     * Получение последних измененных заказов
     *
     * @param DateTime $startDate - начальная дата выборки
     * @param DateTime $endDate - конечная дата
     * @param int $limit - ограничение на размер выборки
     * @param int $offset - сдвиг
     * @return array - массив заказов
     */
    public function orderHistory($startDate = null, $endDate = null, $limit = 100, $offset = 0)
    {
        $url = $this->apiUrl.'orders/history';
        $this->parameters['startDate'] = $startDate;
        $this->parameters['endDate'] = $endDate;
        $this->parameters['limit'] = $limit;
        $this->parameters['offset'] = $offset;

        $result = $this->curlRequest($url);
        return $result;
    }


    /* Методы для работы с клиентами */
    /**
     * Получение клиента по id
     *
     * @param string $id - идентификатор
     * @param string $by - поиск заказа по id или externalId
     * @return array - информация о клиенте
     */
    public function customerGet($id, $by = 'externalId')
    {
        $url = $this->apiUrl.'customers/'.$id;
        if ($by != 'externalId')
            $this->parameters['by'] = $by;
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Создание клиента
     *
     * @param array $customer - информация о клиенте
     * @return array
     */
    public function customerCreate($customer)
    {
        $dataJson = json_encode($customer);
        $this->parameters['customer'] = $dataJson;

        $url = $this->apiUrl.'customers/create';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }

    /**
     * Редактирование клиента
     *
     * @param array $customer - информация о клиенте
     * @return array
     */
    public function customerEdit($customer)
    {
        $dataJson = json_encode($customer);
        $this->parameters['customer'] = $dataJson;

        $url = $this->apiUrl.'customers/'.$customer['externalId'].'/edit';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }

    /**
     * Пакетная загрузка клиентов
     *
     * @param array $customers - массив клиентов
     * @return array
     */
    public function customerUpload($customers)
    {
        $dataJson = json_encode($customers);
        $this->parameters['customers'] = $dataJson;

        $url = $this->apiUrl.'customers/upload';
        $result = $this->curlRequest($url, 'POST');
        if (is_null($result) && isset($result['uploaded']))
            return $result['uploaded'];
        return $result;
    }

    /**
     * Обновление externalId у клиентов с переданными id
     *
     * @param array $customers- массив, содержащий id и externalId заказа
     * @return array
     */
    public function customerFixExternalIds($customers)
    {
        $dataJson = json_encode($customers);
        $this->parameters['customers'] = $dataJson;

        $url = $this->apiUrl.'customers/fix-external-ids';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }

    /**
     * Удаление клиента
     *
     * @param string $id - идентификатор
     * @param string $by - поиск заказа по id или externalId
     * @return array
     */
    /*
    public function customerDelete($id, $by = 'externalId')
    {
        $url = $this->apiUrl.'customers/'.$id.'/delete';
        if ($by != 'externalId')
            $this->parameters['by'] = $by;
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }*/

    /**
     * Получение списка заказов клиента
     *
     * @param string $id - идентификатор клиента
     * @param string $by - поиск заказа по id или externalId
     * @param DateTime $startDate - начальная дата выборки
     * @param DateTime $endDate - конечная дата
     * @param int $limit - ограничение на размер выборки
     * @param int $offset - сдвиг
     * @return array - массив заказов
     */
    public function customerOrdersList($id, $startDate = null, $endDate = null,
        $limit = 100, $offset = 0, $by = 'externalId')
    {
        $url = $this->apiUrl.'customers/'.$id.'/orders';
        if ($by != 'externalId')
            $this->parameters['by'] = $by;
        $this->parameters['startDate'] = $startDate;
        $this->parameters['endDate'] = $endDate;
        $this->parameters['limit'] = $limit;
        $this->parameters['offset'] = $offset;

        $result = $this->curlRequest($url);
        return $result;
    }

    /* Методы для работы со справочниками */
    /**
     * Получение списка типов доставки
     *
     * @return array - массив типов доставки
     */
    public function deliveryTypesList()
    {
        $url = $this->apiUrl.'reference/delivery-types';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование типа доставки
     *
     * @param array $deliveryType - информация о типе доставки
     * @return array
     */
    public function deliveryTypeEdit($deliveryType)
    {
        $dataJson = json_encode($deliveryType);
        $this->parameters['deliveryType'] = $dataJson;

        $url = $this->apiUrl.'reference/delivery-types/'.$deliveryType['code'].'/edit';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }

    /**
     * Получение списка служб доставки
     *
     * @return array - массив типов доставки
     */
    public function deliveryServicesList()
    {
        $url = $this->apiUrl.'reference/delivery-services';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование службы доставки
     *
     * @param array $deliveryService - информация о типе доставки
     * @return array
     */
    public function deliveryServiceEdit($deliveryService)
    {
        $dataJson = json_encode($deliveryService);
        $this->parameters['deliveryService'] = $dataJson;

        $url = $this->apiUrl.'reference/delivery-services/'.$deliveryService['code'].'/edit';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }


    /**
     * Получение списка типов оплаты
     *
     * @return array - массив типов оплаты
     */
    public function paymentTypesList()
    {
        $url = $this->apiUrl.'reference/payment-types';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование типа оплаты
     *
     * @param array $paymentType - информация о типе оплаты
     * @return array
     */
    public function paymentTypesEdit($paymentType)
    {
        $dataJson = json_encode($paymentType);
        $this->parameters['paymentType'] = $dataJson;

        $url = $this->apiUrl.'reference/payment-types/'.$paymentType['code'].'/edit';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }


    /**
     * Получение списка статусов оплаты
     *
     * @return array - массив статусов оплаты
     */
    public function paymentStatusesList()
    {
        $url = $this->apiUrl.'reference/payment-statuses';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование статуса оплаты
     *
     * @param array $paymentStatus - информация о статусе оплаты
     * @return array
     */
    public function paymentStatusesEdit($paymentStatus)
    {
        $dataJson = json_encode($paymentStatus);
        $this->parameters['paymentStatus'] = $dataJson;

        $url = $this->apiUrl.'reference/payment-statuses/'.$paymentStatus['code'].'/edit';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }


    /**
     * Получение списка типов заказа
     *
     * @return array - массив типов заказа
     */
    public function orderTypesList()
    {
        $url = $this->apiUrl.'reference/order-types';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование типа заказа
     *
     * @param array $orderType - информация о типе заказа
     * @return array
     */
    public function orderTypesEdit($orderType)
    {
        $dataJson = json_encode($orderType);
        $this->parameters['orderType'] = $dataJson;

        $url = $this->apiUrl.'reference/order-types/'.$orderType['code'].'/edit';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }


    /**
     * Получение списка способов оформления заказа
     *
     * @return array - массив способов оформления заказа
     */
    public function orderMethodsList()
    {
        $url = $this->apiUrl.'reference/order-methods';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование способа оформления заказа
     *
     * @param array $orderMethod - информация о способе оформления заказа
     * @return array
     */
    public function orderMethodsEdit($orderMethod)
    {
        $dataJson = json_encode($orderMethod);
        $this->parameters['orderMethod'] = $dataJson;

        $url = $this->apiUrl.'reference/order-methods/'.$orderMethod['code'].'/edit';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }

    /**
     * Получение списка статусов заказа
     *
     * @return array - массив статусов заказа
     */
    public function orderStatusesList()
    {
        $url = $this->apiUrl.'reference/statuses';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование статуса заказа
     *
     * @param array $status - информация о статусе заказа
     * @return array
     */
    public function orderStatusEdit($status)
    {
        $dataJson = json_encode($status);
        $this->parameters['status'] = $dataJson;

        $url = $this->apiUrl.'reference/statuses/'.$status['code'].'/edit';
        $result = $this->curlRequest($url, 'POST');
        return $result;
    }


    /**
     * Получение списка групп статусов заказа
     *
     * @return array - массив групп статусов заказа
     */
    public function orderStatusGroupsList()
    {
        $url = $this->apiUrl.'reference/status-groups';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Обновление статистики
     *
     * @return array - статус вып обновления
     */
    public function statisticUpdate()
    {
        $url = $this->apiUrl.'statistic/update';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * @return \DateTime
     */
    public function getGeneratedAt() {
        return $this->generatedAt;
    }

    protected function getErrorMessage($response)
    {
        $str = '';
        if (isset($response['message']))
            $str = $response['message'];
        elseif (isset($response[0]['message']))
            $str = $response[0]['message'];
        elseif (isset($response['error']) && isset($response['error']['message']))
            $str = $response['error']['message'];
        elseif (isset($response['errorMsg']))
            $str = $response['errorMsg'];

        if (isset($response['errors']) && sizeof($response['errors'])) {
            foreach ($response['errors'] as $error)
                $str .= '. ' . $error;
        }

        if (!strlen($str))
            return 'Application Error';

        return $str;
    }

    protected function curlRequest($url, $method = 'GET', $format = 'json')
    {
        if ($method == 'GET' && !is_null($this->parameters))
            $url .= '?'.http_build_query($this->parameters);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, FALSE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // return into a variable
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); // times out after 30s

        if ($method == 'POST')
        {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->parameters);
        }

        $response = curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        unset($this->parameters);
        /* Сброс массива с параметрами */
        $this->parameters = array('apiKey' => $this->apiKey);

        $errno = curl_errno($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($errno)
            throw new Exception\CurlException($error, $errno);

        $result = json_decode($response, true);

        if ($statusCode >= 400 || isset($result['success']) && $result['success'] === false) {
            throw new Exception\ApiException($this->getErrorMessage($result), $statusCode);
        }

        if (isset($result['generatedAt'])) {
            $this->generatedAt = new \DateTime($result['generatedAt']);
            unset($result['generatedAt']);
        }

        unset($result['success']);

        if (count($result) == 0)
            return true;

        return reset($result);
    }
}