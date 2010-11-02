<?php

/**
 * SfComments filter form base class.
 *
 * @package    sp_gallery
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSfCommentsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'image_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfImages'), 'add_empty' => true)),
      'user'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'site'        => new sfWidgetFormFilterInput(),
      'email'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'message'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ip'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_valid'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'image_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SfImages'), 'column' => 'id_image')),
      'user'        => new sfValidatorPass(array('required' => false)),
      'site'        => new sfValidatorPass(array('required' => false)),
      'email'       => new sfValidatorPass(array('required' => false)),
      'message'     => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'ip'          => new sfValidatorPass(array('required' => false)),
      'is_valid'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('sf_comments_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfComments';
  }

  public function getFields()
  {
    return array(
      'id_comments' => 'Number',
      'image_id'    => 'ForeignKey',
      'user'        => 'Text',
      'site'        => 'Text',
      'email'       => 'Text',
      'message'     => 'Text',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
      'ip'          => 'Text',
      'is_valid'    => 'Boolean',
    );
  }
}
