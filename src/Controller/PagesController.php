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
        $this->viewBuilder()->setLayout('default');
    }
    /**
     * Show a basic page with a persons name, and a short description of themselves.
     * The information to be rendered is passed to the template from this action.
     */
    
    public function index()
    {
        $this->render('home');
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
        
        $content = $this->loadModel('Settings');
        $welcomeTitle=$content->get(1)->settingsValue;
        $welcomeSubtitle=$content->get(2)->settingsValue;
        $welcomeBg=$content->get(3)->settingsValue;
        $contactusTitle=$content->get(4)->settingsValue;
        $contactusSubtitle=$content->get(5)->settingsValue;
        $contactusBg=$content->get(6)->settingsValue;
        $contactusStaff1_name=$content->get(7)->settingsValue;
        $contactusStaff1_email=$content->get(8)->settingsValue;
        $contactusStaff1_desc=$content->get(9)->settingsValue;
        $contactusStaff1_photo=$content->get(10)->settingsValue;
        
        $this->set(compact('page', 'subpage','welcomeTitle','welcomeSubtitle','welcomeBg','contactusTitle','contactusSubtitle','contactusBg','contactusStaff1_name','contactusStaff1_email','contactusStaff1_desc','contactusStaff1_photo'));

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
    public function editHome()
    {
        
        
        $content = $this->loadModel('Settings');
        $welcomeTitle="this";//$content->get(1)->settingsValue;
        $welcomeSubtitle="whis";//$content->get(2)->settingsValue;
        $welcomeBg="etc";//$content->get(3)->settingsValue;
        
        $homeElements = array($welcomeTitle, $welcomeSubtitle, $welcomeBg);
        
        $this->viewBuilder()->setLayout('admin');
        $this->set(compact('homeElements'));
        $this->render('editHome');
    }
}
