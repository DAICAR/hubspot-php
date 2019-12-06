<?php

namespace SevenShores\Hubspot\Tests\Integration\Resources;

use SevenShores\Hubspot\Resources\CompanyProperties;
use SevenShores\Hubspot\Tests\Integration\Abstraction\Properties;

/**
 * @internal
 * @coversNothing
 */
class CompanyPropertiesTest extends Properties
{
    /**
     * @var null|SevenShores\Hubspot\Resources\Resource
     */
    protected $resourceClass = CompanyProperties::class;

    /**
     * @var string
     */
    protected $groupName = 'companyinformation';
}
