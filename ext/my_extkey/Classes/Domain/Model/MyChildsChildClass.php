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
 * MyChildsChildClass
 */
class MyChildsChildClass extends \MyVendor\MyExtkey\Domain\Model\MyChildClass
{

    /**
     * subsubtitle
     * 
     * @var string
     */
    protected $subsubtitle = '';

    /**
     * subSubTitle
     * 
     * @var string
     */
    protected $subSubTitle = '';

    /**
     * Returns the subsubtitle
     * 
     * @return string subsubtitle
     */
    public function getSubsubtitle()
    {
        return $this->subsubtitle;
    }

    /**
     * Sets the subsubtitle
     * 
     * @param string $subsubtitle
     * @return void
     */
    public function setSubsubtitle($subsubtitle)
    {
        $this->subsubtitle = $subsubtitle;
    }
}
