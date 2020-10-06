<?php

namespace Dafis\RestApi\Controller;

use Dafis\Core\Domain\Model\Organization;

class OrganizationController extends AbstractController
{

    protected static $RESOURCE_ENTITY_CLASS = Organization::class;

    protected $resourceEntityRenderConfiguration = ['name'];

}