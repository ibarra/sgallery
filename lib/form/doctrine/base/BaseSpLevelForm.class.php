<?php

/**
 * SpLevel form base class.
 *
 * @method SpLevel getObject() Returns the current form's model object
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpLevelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_level' => new sfWidgetFormInputHidden(),
      'role'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_level' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_level')), 'empty_value' => $this->getObject()->get('id_level'), 'required' => false)),
      'role'     => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('sp_level[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SpLevel';
  }

}
