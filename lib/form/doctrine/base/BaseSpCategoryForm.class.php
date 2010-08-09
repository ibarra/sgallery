<?php

/**
 * SpCategory form base class.
 *
 * @method SpCategory getObject() Returns the current form's model object
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_category' => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormTextarea(),
      'description' => new sfWidgetFormTextarea(),
      'date'        => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_category' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_category')), 'empty_value' => $this->getObject()->get('id_category'), 'required' => false)),
      'name'        => new sfValidatorString(),
      'description' => new sfValidatorString(array('required' => false)),
      'date'        => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('sp_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SpCategory';
  }

}
