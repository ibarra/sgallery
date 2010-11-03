<?php

/**
 * SfGalleryMembers form.
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SfGalleryMembersForm extends BaseSfGalleryMembersForm
{
  public function configure()
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

  }
}
