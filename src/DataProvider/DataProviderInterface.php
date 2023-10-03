<?php

declare(strict_types=1);

namespace Platim\Presenter\Contracts\DataProvider;

use Platim\Presenter\Contracts\DataProvider\QueryBuilder\QueryBuilderInterface;

interface DataProviderInterface
{
    public function getQueryBuilder(): QueryBuilderInterface;
}
