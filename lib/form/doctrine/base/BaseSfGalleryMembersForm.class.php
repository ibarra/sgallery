<?php

/**
 * SfGalleryMembers form base class.
 *
 * @method SfGalleryMembers getObject() Returns the current form's model object
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSfGalleryMembersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_members' => new sfWidgetFormInputHidden(),
      'gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGallery'), 'add_empty' => false)),
      'user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_members' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_members')), 'empty_value' => $this->getObject()->get('id_members'), 'required' => false)),
      'gallery_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGallery'))),
      'user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'))),
    ));

    $this->widgetSchema->setNameFormat('sf_gallery_members[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfGalleryMembers';
  }

}
