<?php

/**
 * imagesgallery actions.
 *
 * @package    sp_gallery
 * @subpackage imagesgallery
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class imagesgalleryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sf_imagess = Doctrine::getTable('SfImages')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sf_images = Doctrine::getTable('SfImages')->find(array($request->getParameter('id_image')));
    $this->forward404Unless($this->sf_images);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SfImagesForm();
    $this->form->setDefault('user_id', 1);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SfImagesForm();
    
    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sf_images = Doctrine::getTable('SfImages')->find(array($request->getParameter('id_image'))), sprintf('Object sf_images does not exist (%s).', $request->getParameter('id_image')));
    $this->form = new SfImagesForm($sf_images);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sf_images = Doctrine::getTable('SfImages')->find(array($request->getParameter('id_image'))), sprintf('Object sf_images does not exist (%s).', $request->getParameter('id_image')));
    $this->form = new SfImagesForm($sf_images);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sf_images = Doctrine::getTable('SfImages')->find(array($request->getParameter('id_image'))), sprintf('Object sf_images does not exist (%s).', $request->getParameter('id_image')));
    $sf_images->delete();

    $this->redirect('imagesgallery/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sf_images = $form->save();

      $this->redirect('imagesgallery/edit?id_image='.$sf_images->getIdImage());
    }
  }
}
