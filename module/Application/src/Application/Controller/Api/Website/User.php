<?php
/**
 * Enrise Restful Skeleton Application (http://enrise.com/)
 *
 * @link      https://github.com/Enrise/EnriseRestfulSkeletonApplication
 * @copyright Copyright (c) 2012 Dolf Schimmel - Freeaqingme (dolfschimmel@gmail.com)
 * @copyright Copyright (c) 2012 Enrise (www.enrise.com)
 * @license   New BSD License, see LICENSE.MD
 */

namespace Application\Controller\Api\Website;

use Enrise\RestfulApi\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;

class User extends AbstractRestfulController
{

    /**
     *
     * @var string|array
     */
    protected static $resourceId = 'user';

    /**
     * @var string|array
     */
    protected static $collectionId = 'users';



    public function collectionGetAction()
    {
//         $db = $this->getServiceLocator()->get('Global\Db\Adapter\Main');
//         var_dump($db->query('SELECT @@SESSION.sql_mode;'));
        $website = $this->getRequest()->getMetadata('website');
        return new ViewModel();
    }

    public function resourceGetAction()
    {
        var_dump($this->getResourceId());
        exit;
    }

}
