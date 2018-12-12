<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
        $this->viewBuilder()->setLayout('default');
    }
    /**
     * Show a basic page with a persons name, and a short description of themselves.
     * The information to be rendered is passed to the template from this action.
     */
    
    public function index()
    {
        $homePageSettings = array();
        $content = $this->loadModel('Settings');
        $homePageSettings[$content->get(1)->settingsKey]=$content->get(1)->settingsValue;
        $homePageSettings[$content->get(2)->settingsKey]=$content->get(2)->settingsValue;
        $homePageSettings[$content->get(3)->settingsKey]=$content->get(3)->settingsValue;
        $homePageSettings[$content->get(4)->settingsKey]=$content->get(4)->settingsValue;
        $homePageSettings[$content->get(5)->settingsKey]=$content->get(5)->settingsValue;
        $homePageSettings[$content->get(6)->settingsKey]=$content->get(6)->settingsValue;
        $homePageSettings[$content->get(7)->settingsKey]=$content->get(7)->settingsValue;
        $homePageSettings[$content->get(8)->settingsKey]=$content->get(8)->settingsValue;
        $homePageSettings[$content->get(9)->settingsKey]=$content->get(9)->settingsValue;
        $homePageSettings[$content->get(10)->settingsKey]=$content->get(10)->settingsValue;
        //debug($homePageSettings);
        $this->set('homePageSettings', $homePageSettings);

        $this->render('home'); //It seems you have to render after you passed parameters.
    }
    
    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }

        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
    
    // Edit static pages
    public function adminHome()
    {
        $this->viewBuilder()->setLayout('admin');
        //$this->set(compact('homeElements'));
        $this->render('adminHome');
    }
}
