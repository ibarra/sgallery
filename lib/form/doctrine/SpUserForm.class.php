<?php

/**
 * SpUser form.
 *
 * @package    sp_gallery
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SpUserForm extends BaseSpUserForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'id_user'    => new sfWidgetFormInputHidden(),
      'username'   => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'first_name' => new sfWidgetFormInputText(),
      'last_name'  => new sfWidgetFormInputText(),
      'date'       => new sfWidgetFormDate(),
      'email'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_user'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_user')), 'empty_value' => $this->getObject()->get('id_user'), 'required' => false)),
      'username'   => new sfValidatorString(),
      'password'   => new sfValidatorString(),
      'first_name' => new sfValidatorString(),
      'last_name'  => new sfValidatorString(),
      'date'       => new sfValidatorDate(),
      'email'      => new sfValidatorEmail(),
    ));

    $this->widgetSchema->setNameFormat('sp_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }
}
