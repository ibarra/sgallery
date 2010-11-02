<?php

/**
 * SfImages form base class.
 *
 * @method SfImages getObject() Returns the current form's model object
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSfImagesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_image'    => new sfWidgetFormInputHidden(),
      'gallery_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGallery'), 'add_empty' => false)),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => false)),
      'description' => new sfWidgetFormTextarea(),
      'order'       => new sfWidgetFormTextarea(),
      'name'        => new sfWidgetFormTextarea(),
      'created_at'  => new sfWidgetFormDate(),
      'updated_at'  => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_image'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_image')), 'empty_value' => $this->getObject()->get('id_image'), 'required' => false)),
      'gallery_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGallery'))),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'))),
      'description' => new sfValidatorString(array('required' => false)),
      'order'       => new sfValidatorString(array('required' => false)),
      'name'        => new sfValidatorString(),
      'created_at'  => new sfValidatorDate(array('required' => false)),
      'updated_at'  => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_images[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfImages';
  }

}
