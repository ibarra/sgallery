<?php

/**
 * SfGallery form.
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SfGalleryForm extends BaseSfGalleryForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);

      $this->setWidgets(array(
      'id_gallery'  => new sfWidgetFormInputHidden(),
      'title'       => new sfWidgetFormInput(),
      'description' => new sfWidgetFormInput(),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => false)),

    ));

    $this->setValidators(array(
      'id_gallery'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_gallery')), 'empty_value' => $this->getObject()->get('id_gallery'), 'required' => false)),
      'title'       => new sfValidatorString(),
      'description' => new sfValidatorString(array('required' => false)),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'))),

    ));

    $this->widgetSchema->setNameFormat('sf_gallery[%s]');

  }
}
