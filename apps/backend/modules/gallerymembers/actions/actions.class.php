<?php

/**
 * gallerymembers actions.
 *
 * @package    sp_gallery
 * @subpackage gallerymembers
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class gallerymembersActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sf_gallery_memberss = Doctrine::getTable('SfGalleryMembers')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sf_gallery_members = Doctrine::getTable('SfGalleryMembers')->find(array($request->getParameter('id_members')));
    $this->forward404Unless($this->sf_gallery_members);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SfGalleryMembersForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SfGalleryMembersForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sf_gallery_members = Doctrine::getTable('SfGalleryMembers')->find(array($request->getParameter('id_members'))), sprintf('Object sf_gallery_members does not exist (%s).', $request->getParameter('id_members')));
    $this->form = new SfGalleryMembersForm($sf_gallery_members);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sf_gallery_members = Doctrine::getTable('SfGalleryMembers')->find(array($request->getParameter('id_members'))), sprintf('Object sf_gallery_members does not exist (%s).', $request->getParameter('id_members')));
    $this->form = new SfGalleryMembersForm($sf_gallery_members);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sf_gallery_members = Doctrine::getTable('SfGalleryMembers')->find(array($request->getParameter('id_members'))), sprintf('Object sf_gallery_members does not exist (%s).', $request->getParameter('id_members')));
    $sf_gallery_members->delete();

    $this->redirect('gallerymembers/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sf_gallery_members = $form->save();

      $this->redirect('gallerymembers/edit?id_members='.$sf_gallery_members->getIdMembers());
    }
  }
}
