<?php

/**
 * SfImages
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sp_gallery
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class SfImages extends BaseSfImages
{
    public function save(Doctrine_Connection $conn = null)
    {
        if ($this->isNew())
        {
          $this->setCreatedAt(date('Y-m-d h:i:s'));
        }
        return parent::save($conn);
    }
}
