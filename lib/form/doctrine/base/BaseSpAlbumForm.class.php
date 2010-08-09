<?php

/**
 * SpAlbum form base class.
 *
 * @method SpAlbum getObject() Returns the current form's model object
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpAlbumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_album'    => new sfWidgetFormInputHidden(),
      'description' => new sfWidgetFormTextarea(),
      'name'        => new sfWidgetFormTextarea(),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SpUser'), 'add_empty' => false)),
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SpCategory'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_album'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_album')), 'empty_value' => $this->getObject()->get('id_album'), 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
      'name'        => new sfValidatorString(),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SpUser'))),
      'category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SpCategory'))),
    ));

    $this->widgetSchema->setNameFormat('sp_album[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SpAlbum';
  }

}
