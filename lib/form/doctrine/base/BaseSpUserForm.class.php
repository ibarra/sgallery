<?php

/**
 * SpUser form base class.
 *
 * @method SpUser getObject() Returns the current form's model object
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_user'        => new sfWidgetFormInputHidden(),
      'username'       => new sfWidgetFormTextarea(),
      'password'       => new sfWidgetFormTextarea(),
      'first_name'     => new sfWidgetFormTextarea(),
      'last_name'      => new sfWidgetFormTextarea(),
      'date'           => new sfWidgetFormDate(),
      'email'          => new sfWidgetFormTextarea(),
      'web'            => new sfWidgetFormTextarea(),
      'level_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SpLevel'), 'add_empty' => false)),
      'status'         => new sfWidgetFormInputText(),
      'activation_key' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_user'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_user')), 'empty_value' => $this->getObject()->get('id_user'), 'required' => false)),
      'username'       => new sfValidatorString(),
      'password'       => new sfValidatorString(),
      'first_name'     => new sfValidatorString(),
      'last_name'      => new sfValidatorString(),
      'date'           => new sfValidatorDate(),
      'email'          => new sfValidatorString(),
      'web'            => new sfValidatorString(array('required' => false)),
      'level_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SpLevel'))),
      'status'         => new sfValidatorInteger(),
      'activation_key' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('sp_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SpUser';
  }

}
