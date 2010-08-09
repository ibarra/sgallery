<?php

/**
 * category actions.
 *
 * @package    sp_gallery
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sp_categorys = Doctrine::getTable('SpCategory')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sp_category = Doctrine::getTable('SpCategory')->find(array($request->getParameter('id_category')));
    $this->forward404Unless($this->sp_category);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SpCategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SpCategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sp_category = Doctrine::getTable('SpCategory')->find(array($request->getParameter('id_category'))), sprintf('Object sp_category does not exist (%s).', $request->getParameter('id_category')));
    $this->form = new SpCategoryForm($sp_category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sp_category = Doctrine::getTable('SpCategory')->find(array($request->getParameter('id_category'))), sprintf('Object sp_category does not exist (%s).', $request->getParameter('id_category')));
    $this->form = new SpCategoryForm($sp_category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sp_category = Doctrine::getTable('SpCategory')->find(array($request->getParameter('id_category'))), sprintf('Object sp_category does not exist (%s).', $request->getParameter('id_category')));
    $sp_category->delete();

    $this->redirect('category/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sp_category = $form->save();

      $this->redirect('category/edit?id_category='.$sp_category->getIdCategory());
    }
  }
}
