<?php
namespace MyVendor\MyExtkey\Controller;


/***
 *
 * This file is part of the "MyExtension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * MyParentClassController
 */
class MyParentClassController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * myParentClassRepository
     * 
     * @var \MyVendor\MyExtkey\Domain\Repository\MyParentClassRepository
     * @inject
     */
    protected $myParentClassRepository = null;

    /**
     * myChildClassRepository
     * 
     * @var \MyVendor\MyExtkey\Domain\Repository\MyChildClassRepository
     * @inject
     */
    protected $myChildClassRepository = null;

    /**
     * myChildsChildClassRepository
     * 
     * @var \MyVendor\MyExtkey\Domain\Repository\MyChildsChildClassRepository
     * @inject
     */
    protected $myChildsChildClassRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $myParentClasses = $this->myParentClassRepository->findAll();
        $myChildClasses = $this->myChildClassRepository->findAll();
        $myChildsChildClasses = $this->myChildsChildClassRepository->findAll();
        $this->view->assign('myParentClasses', $myParentClasses);
    }

    /**
     * action show
     * 
     * @param \MyVendor\MyExtkey\Domain\Model\MyParentClass $myParentClass
     * @return void
     */
    public function showAction(\MyVendor\MyExtkey\Domain\Model\MyParentClass $myParentClass)
    {
        $this->view->assign('myParentClass', $myParentClass);
    }
}
