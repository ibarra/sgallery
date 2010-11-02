<?php

/**
 * SfComments form base class.
 *
 * @method SfComments getObject() Returns the current form's model object
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSfCommentsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_comments' => new sfWidgetFormInputHidden(),
      'image_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfImages'), 'add_empty' => false)),
      'user'        => new sfWidgetFormTextarea(),
      'site'        => new sfWidgetFormTextarea(),
      'email'       => new sfWidgetFormTextarea(),
      'message'     => new sfWidgetFormTextarea(),
      'created_at'  => new sfWidgetFormDate(),
      'updated_at'  => new sfWidgetFormDate(),
      'ip'          => new sfWidgetFormTextarea(),
      'is_valid'    => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id_comments' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_comments')), 'empty_value' => $this->getObject()->get('id_comments'), 'required' => false)),
      'image_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfImages'))),
      'user'        => new sfValidatorString(),
      'site'        => new sfValidatorString(array('required' => false)),
      'email'       => new sfValidatorString(),
      'message'     => new sfValidatorString(),
      'created_at'  => new sfValidatorDate(array('required' => false)),
      'updated_at'  => new sfValidatorDate(array('required' => false)),
      'ip'          => new sfValidatorString(),
      'is_valid'    => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_comments[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfComments';
  }

}
