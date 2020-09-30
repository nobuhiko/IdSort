<?php

namespace Plugin\IdSort\Repository;


use Eccube\Doctrine\Query\OrderByClause;
use Eccube\Doctrine\Query\OrderByCustomizer;
use Eccube\Repository\QueryKey;

class AdminCustomerListCustomizer extends OrderByCustomizer
{
    /**
     * 常に商品IDでソートする。
     *
     * @param array $params
     * @param $queryKey
     * @return OrderByClause[]
     */
    protected function createStatements($params, $queryKey)
    {
        return [new OrderByClause('c.id', 'desc')];
    }

    /**
     * CustomerRepository::getQueryBuilderBySearchDataForAdmin に適用する.
     *
     * @return string
     * @see \Eccube\Repository\CustomerRepository::getQueryBuilderBySearchDataForAdmin()
     * @see QueryKey
     */
    public function getQueryKey()
    {
        return QueryKey::CUSTOMER_SEARCH;
    }
}
