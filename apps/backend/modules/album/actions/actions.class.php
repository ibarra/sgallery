<?php

/**
 * album actions.
 *
 * @package    sp_gallery
 * @subpackage album
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class albumActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sp_albums = Doctrine::getTable('SpAlbum')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sp_album = Doctrine::getTable('SpAlbum')->find(array($request->getParameter('id_album')));
    $this->forward404Unless($this->sp_album);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SpAlbumForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SpAlbumForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sp_album = Doctrine::getTable('SpAlbum')->find(array($request->getParameter('id_album'))), sprintf('Object sp_album does not exist (%s).', $request->getParameter('id_album')));
    $this->form = new SpAlbumForm($sp_album);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sp_album = Doctrine::getTable('SpAlbum')->find(array($request->getParameter('id_album'))), sprintf('Object sp_album does not exist (%s).', $request->getParameter('id_album')));
    $this->form = new SpAlbumForm($sp_album);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sp_album = Doctrine::getTable('SpAlbum')->find(array($request->getParameter('id_album'))), sprintf('Object sp_album does not exist (%s).', $request->getParameter('id_album')));
    $sp_album->delete();

    $this->redirect('album/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sp_album = $form->save();

      $this->redirect('album/edit?id_album='.$sp_album->getIdAlbum());
    }
  }
}
