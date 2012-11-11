<?php
/**
 * Enrise Restful Skeleton Application (http://enrise.com/)
 *
 * @link      https://github.com/Enrise/EnriseRestfulSkeletonApplication
 * @copyright Copyright (c) 2012 Dolf Schimmel - Freeaqingme (dolfschimmel@gmail.com)
 * @copyright Copyright (c) 2012 Enrise (www.enrise.com)
 * @license   New BSD License, see LICENSE.MD
 */

namespace Application\Controller\Api;


use Enrise\RestfulApi\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;
use Enrise\RestfulApi\Mvc\Router\Http\Rest\RouteMatch;

class Website extends AbstractRestfulController
{

    /**
     *
     * @var string|array
     */
    protected static $resourceId = 'website';

    /**
     * @var string|array
     */
    protected static $collectionId = 'websites';

    public function passThroughResource(RouteMatch $routeMatch)
    {
        list($key, $value) = parent::passThroughResource($routeMatch);

        // $mapper = $this->_getMapper();
        // $obj = $mapper->findById($key);
        $obj  = (object) array('id' => $value);

        $this->getRequest()->setMetadata($key, $obj);
    }

    public function collectionGetAction()
    {
        $website = $this->getRequest()->getMetadata('website');
        return new ViewModel();
    }

    public function resourceGetAction()
    {
        echo 'Resource of website';
        exit;
    }

}
