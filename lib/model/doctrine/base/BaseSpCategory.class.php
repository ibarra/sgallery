<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SpCategory', 'doctrine');

/**
 * BaseSpCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_category
 * @property string $name
 * @property string $description
 * @property date $date
 * @property Doctrine_Collection $SpAlbum
 * 
 * @method integer             getIdCategory()  Returns the current record's "id_category" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method date                getDate()        Returns the current record's "date" value
 * @method Doctrine_Collection getSpAlbum()     Returns the current record's "SpAlbum" collection
 * @method SpCategory          setIdCategory()  Sets the current record's "id_category" value
 * @method SpCategory          setName()        Sets the current record's "name" value
 * @method SpCategory          setDescription() Sets the current record's "description" value
 * @method SpCategory          setDate()        Sets the current record's "date" value
 * @method SpCategory          setSpAlbum()     Sets the current record's "SpAlbum" collection
 * 
 * @package    sp_gallery
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSpCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sp_category');
        $this->hasColumn('id_category', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'sp_category_id_category',
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('SpAlbum', array(
             'local' => 'id_category',
             'foreign' => 'category_id'));
    }
}