<?php

declare(strict_types=1);

namespace Platim\Presenter\Contracts\DataProvider\QueryBuilder;

interface QueryBuilderInterface extends QueryBuilderFilterInterface, QueryBuilderPaginationInterface, QueryBuilderSortInterface
{
}
