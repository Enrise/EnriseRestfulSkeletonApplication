<?php
/**
 * Enrise Restful Skeleton Application (http://enrise.com/)
 *
 * @link      https://github.com/Enrise/EnriseRestfulSkeletonApplication
 * @copyright Copyright (c) 2012 Dolf Schimmel - Freeaqingme (dolfschimmel@gmail.com)
 * @copyright Copyright (c) 2012 Enrise (www.enrise.com)
 * @license   New BSD License, see LICENSE.MD
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
