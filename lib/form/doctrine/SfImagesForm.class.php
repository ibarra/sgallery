<?php

/**
 * SfImages form.
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SfImagesForm extends BaseSfImagesForm
{
  public function configure()
  {
      unset($this['created_at'],$this['updated_at'],$this['order']);

       $this->setWidgets(array(
      'id_image'    => new sfWidgetFormInputHidden(),
      'user_id'    => new sfWidgetFormInputHidden(),
    /**
     * fix me, add only my gallery 
     */
      'gallery_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGallery'), 'add_empty' => false)),
      'description' => new sfWidgetFormInput(),
      'name'        => new sfWidgetFormInputFile()

    ));

    $this->setValidators(array(
      'id_image'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_image')), 'empty_value' => $this->getObject()->get('id_image'), 'required' => false)),
      'gallery_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGallery'))),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'))),
      'description' => new sfValidatorString(array('required' => false)),
      'name' 		=> new sfValidatorFile(array('required'   => true,'mime_types' => 'web_images',
      						'path' => sfConfig::get('sf_upload_dir').'/gallery', 'validated_file_class' => 'sfResizedFile',)),
    ));

    $this->widgetSchema->setNameFormat('sf_images[%s]');

  }
}
