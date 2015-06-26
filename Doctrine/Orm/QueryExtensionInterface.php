<?php

/*
 * This file is part of the DunglasApiBundle package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Dunglas\ApiBundle\Doctrine\Orm;

use Doctrine\ORM\QueryBuilder;
use Dunglas\ApiBundle\Api\ResourceInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Interface of Doctrine ORM query extensions.
 *
 * @author Samuel ROZE <samuel.roze@gmail.com>
 */
interface QueryExtensionInterface
{
    /**
     * @param ResourceInterface $resource
     * @param Request           $request
     * @param QueryBuilder      $queryBuilder
     */
    public function apply(ResourceInterface $resource, Request $request, QueryBuilder $queryBuilder);
}
