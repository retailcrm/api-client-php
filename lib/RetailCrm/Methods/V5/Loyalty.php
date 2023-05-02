<?php

namespace RetailCrm\Methods\V5;

use InvalidArgumentException;
use RetailCrm\Response\ApiResponse;

trait Loyalty
{
    /**
     * Create Account
     *
     * @param array  $loyaltyAccount
     * @param string $site
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function accountCreate(array $loyaltyAccount, $site)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkSite($site);

        if (empty($loyaltyAccount['phoneNumber']) && empty($loyaltyAccount['cardNumber'])) {
            throw new InvalidArgumentException(
                'One of the parameters must be filled: `phoneNumber` or `cardNumber`'
            );
        }

        if (empty($loyaltyAccount['customer'])) {
            throw new InvalidArgumentException(
                'Parameter `customer` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/loyalty/account/create',
            'POST',
            $this->fillSite(
                $site,
                ['loyaltyAccount' => json_encode($loyaltyAccount)]
            )
        );
    }

    /**
     * Get Account info
     *
     * @param int $id
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function accountGet($id)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkId($id);

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/loyalty/account/$id",
            'GET'
        );
    }

    /**
     * Activate Account
     *
     * @param int $id
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function accountActivate($id)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkId($id);

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/loyalty/account/$id/activate",
            'POST'
        );
    }

    /**
     * Write off Bonuses for participation in the loyalty program
     *
     * @param int   $id
     * @param array $bonus
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function bonusCharge($id, array $bonus)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkId($id);

        if (empty($bonus['amount'])) {
            throw new InvalidArgumentException(
                'Parameter `amount` must contains a data or must be greater than 0'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/loyalty/account/$id/bonus/charge",
            'POST',
            $bonus
        );
    }

    /**
     * Accrue Bonuses for participation in the loyalty program
     *
     * @param int   $id
     * @param array $bonus
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function bonusCredit($id, array $bonus)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkId($id);

        if (empty($bonus['amount'])) {
            throw new InvalidArgumentException(
                'Parameter `amount` must contains a data or must be greater than 0'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/loyalty/account/$id/bonus/credit",
            'POST',
            $bonus
        );
    }

    /**
     * Get a Bonus account history to participate in the loyalty program
     *
     * @param int   $id
     * @param array $filter
     * @param int   $limit
     * @param int   $page
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function accountBonusOperationsGet($id, array $filter = [], $limit = 20, $page = 1)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkId($id);
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkPaginationParameters($limit, $page);

        $parameters = [
            'limit' => $limit,
            'page' => $page,
        ];
        if (!empty($filter)) {
            $parameters['filter'] = $filter;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/loyalty/account/$id/bonus/operations",
            'GET',
            $parameters
        );
    }

    /**
     * Get detailed information about Bonuses
     *
     * @param int    $id
     * @param string $status
     * @param array  $filter
     * @param int    $limit
     * @param int    $page
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function accountBonusDetailsGet($id, $status, array $filter = [], $limit = 20, $page = 1)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkId($id);
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkPaginationParameters($limit, $page);

        $allowedStatuses = [
            'waiting_activation',
            'burn_soon',
        ];
        if (!in_array($status, $allowedStatuses, true)) {
            throw new InvalidArgumentException(
                'Parameter `status` must take one of the values [`waiting_activation`,`burn_soon`]'
            );
        }

        $parameters = [
            'limit' => $limit,
            'page' => $page,
        ];
        if (!empty($filter)) {
            $parameters['filter'] = $filter;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/loyalty/account/$id/bonus/$status/details",
            'GET',
            $parameters
        );
    }

    /**
     * Editing participation in the loyalty program
     *
     * @param int   $id
     * @param array $loyaltyAccount
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function accountEdit($id, array $loyaltyAccount)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkId($id);
        if (empty($loyaltyAccount)) {
            throw new InvalidArgumentException(
                'Parameter `loyaltyAccount` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/loyalty/account/$id/edit",
            'POST',
            ['loyaltyAccount' => \json_encode($loyaltyAccount)]
        );
    }


    /**
     * Get Accounts info
     *
     * @param array $filter
     * @param int   $limit
     * @param int   $page
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function accountsGet(array $filter = [], $limit = 20, $page = 1)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkPaginationParameters($limit, $page);
        $parameters = [
            'limit' => $limit,
            'page' => $page,
        ];
        if (!empty($filter)) {
            $parameters['filter'] = $filter;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/loyalty/accounts',
            'GET',
            $parameters
        );
    }

    /**
     * Get the Bonus account history for all participants in all loyalty programs
     *
     * @param array       $filter
     * @param int         $limit
     * @param string|null $cursor
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function bonusOperationsGet($cursor, array $filter = [], $limit = 20)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkPaginationLimit($limit);

        $parameters = [
            'limit' => $limit,
        ];
        if (!empty($filter)) {
            $parameters['filter'] = $filter;
        }
        if (!empty($cursor)) {
            $parameters['cursor'] = $cursor;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/loyalty/bonus/operations',
            'GET',
            $parameters
        );
    }

    /**
     * Calculate the maximum customer discount
     *
     * @param string   $site
     * @param array    $order
     * @param int|null $bonuses
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function calculate($site, array $order, $bonuses)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkSite($site);
        if (empty($order)) {
            throw new InvalidArgumentException(
                'Parameter `order` must contains a data'
            );
        }
        if (null !== $bonuses && !is_int($bonuses) && !is_float($bonuses)) {
            throw new InvalidArgumentException(
                'Parameter `limit` must be an integer or float'
            );
        }

        $data = $this->fillSite($site, ['order' => \json_encode($order)]);
        if (null !== $bonuses) {
            $data['bonuses'] = $bonuses;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/loyalty/calculate',
            'POST',
            $data
        );
    }

    /**
     * Get a list of loyalty programs
     *
     * @param array $filter
     * @param int   $limit
     * @param int   $page
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function loyaltiesGet(array $filter = [], $limit = 20, $page = 1)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkPaginationParameters($limit, $page);
        $parameters = [
            'limit' => $limit,
            'page' => $page,
        ];
        if (!empty($filter)) {
            $parameters['filter'] = $filter;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/loyalty/loyalties',
            'GET',
            $parameters
        );
    }

    /**
     * Get information about the loyalty program
     *
     * @param int $id
     *
     * @return ApiResponse
     * @throws InvalidArgumentException
     */
    public function loyaltyGet($id)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        $this->checkId($id);

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/loyalty/loyalties/$id",
            'GET'
        );
    }
}
