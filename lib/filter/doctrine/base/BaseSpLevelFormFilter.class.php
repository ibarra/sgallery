<?php

/**
 * SpLevel filter form base class.
 *
 * @package    sp_gallery
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpLevelFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'role'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'role'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sp_level_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SpLevel';
  }

  public function getFields()
  {
    return array(
      'id_level' => 'Number',
      'role'     => 'Text',
    );
  }
}
