<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {

        $firephp = $this->getServiceLocator()->get('Zend\Log\FirePhp');
        $firephp->info("Log de Informação");
        $firephp->warn("warn log");
        $firephp->crit("critical log");
        
        return new ViewModel();
    }

    public function testeAction() {
		return new ViewModel();
    }

}