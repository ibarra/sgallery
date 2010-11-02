<?php

/**
 * gallery actions.
 *
 * @package    sp_gallery
 * @subpackage gallery
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class galleryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sf_gallerys = Doctrine::getTable('SfGallery')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sf_gallery = Doctrine::getTable('SfGallery')->find(array($request->getParameter('id_gallery')));
    $this->forward404Unless($this->sf_gallery);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SfGalleryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SfGalleryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sf_gallery = Doctrine::getTable('SfGallery')->find(array($request->getParameter('id_gallery'))), sprintf('Object sf_gallery does not exist (%s).', $request->getParameter('id_gallery')));
    $this->form = new SfGalleryForm($sf_gallery);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sf_gallery = Doctrine::getTable('SfGallery')->find(array($request->getParameter('id_gallery'))), sprintf('Object sf_gallery does not exist (%s).', $request->getParameter('id_gallery')));
    $this->form = new SfGalleryForm($sf_gallery);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sf_gallery = Doctrine::getTable('SfGallery')->find(array($request->getParameter('id_gallery'))), sprintf('Object sf_gallery does not exist (%s).', $request->getParameter('id_gallery')));
    $sf_gallery->delete();

    $this->redirect('gallery/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sf_gallery = $form->save();

      $this->redirect('gallery/edit?id_gallery='.$sf_gallery->getIdGallery());
    }
  }
}
