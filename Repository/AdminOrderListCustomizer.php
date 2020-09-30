<?php

namespace Plugin\IdSort\Repository;


use Eccube\Doctrine\Query\OrderByClause;
use Eccube\Doctrine\Query\OrderByCustomizer;
use Eccube\Repository\QueryKey;

class AdminOrderListCustomizer extends OrderByCustomizer
{
    /**
     * 常にIDでソートする。
     *
     * @param array $params
     * @param $queryKey
     * @return OrderByClause[]
     */
    protected function createStatements($params, $queryKey)
    {
        return [new OrderByClause('o.id', 'desc')];
    }

    /**
     * OrderRepository::getQueryBuilderBySearchDataForAdmin に適用する.
     *
     * @return string
     * @see \Eccube\Repository\OrderRepository::getQueryBuilderBySearchDataForAdmin()
     * @see QueryKey
     */
    public function getQueryKey()
    {
        return QueryKey::ORDER_SEARCH_ADMIN;
    }
}
