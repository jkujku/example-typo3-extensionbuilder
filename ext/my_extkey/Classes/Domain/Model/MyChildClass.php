<?php
namespace MyVendor\MyExtkey\Domain\Model;


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
 * MyChildClass
 */
class MyChildClass extends \MyVendor\MyExtkey\Domain\Model\MyParentClass
{

    /**
     * subTitle
     * 
     * @var string
     */
    protected $subTitle = '';

    /**
     * Returns the subTitle
     * 
     * @return string $subTitle
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets the subTitle
     * 
     * @param string $subTitle
     * @return void
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
    }
}
