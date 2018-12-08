<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Text;
/**
 * Article Controller
 *
 * @property \App\Model\Table\ArticleTable $Article
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticleController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();        
        $this->viewBuilder()->setLayout('admin');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Category']
        ];
        $article = $this->paginate($this->Article);

        $this->set(compact('article'));
    }
    public function searchByStatus($status = null) 
    {
        $this_status = $status;
        $articles = $this->Article->find()->where(['Article.status'=>$status]);
        //debug($articles->toArray());
        //toArray() is used to execute sql query. Ususally you don't need this since set(compact) will do it for you. 
        //exit; //forcably stop the code right here so we can see the debug information. 
        $articles = $this->paginate($articles);
        $this->set(compact('articles'));
        $this->set(compact('this_status'));
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Article->get($id, [
            'contain' => ['Category']
        ]);

        $this->set('article', $article);
        $this->viewBuilder()->setLayout('article');
    }
    public function viewArticleIndex($id = null)
    {
        $article = $this->Article->get($id, [
            'contain' => ['Category']
        ]);
        $articles = $this->Article->find();
        $category_id = $article->category_id;
        $articleIndexSettings = array();
        $content = $this->loadModel('Settings');
        $articleIndexSettings [$content->get(11)->settingsKey]=$content->get(11)->settingsValue;
        $articleIndexSettings [$content->get(12)->settingsKey]=$content->get(12)->settingsValue;
        
        $this->set('article', $article);
        $this->set('articles', $articles);
        $this->set('category_id', $category_id);
        $this->set('articleIndexSettings', $articleIndexSettings);
        $this->viewBuilder()->setLayout('article');
    }
    

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Article->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Article->patchEntity($article, $this->request->getData());
            if ($this->Article->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $category = $this->Article->Category->find('list', ['limit' => 200]);
        $this->set(compact('article', 'category'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Article->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Article->patchEntity($article, $this->request->getData());
            if ($this->Article->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $category = $this->Article->Category->find('list', ['limit' => 200]);
        $this->set(compact('article', 'category'));
        // TinyMCE Helper
        //$this->helpers = array('TinyMCE.TinyMCE');
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Article->get($id);
        if ($this->Article->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    /**
    * Publish method
    * 
    * @param string|null $id Article id.
    * @return \Cake\Http\Response|null Redirects to index.
    * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    */
    public function publish($id = null) 
    {
        $article = $this->Article->get($id);
        $article->status = "published";
        
        if ($this->Article->save($article)) {
            $this->Flash->success(__('The article has been published.'));
        } else {
            $this->Flash->error(__('The article could not be published. Please, try again.'));
        }
        
        return $this->redirect(['action' => 'index']);
    }
    
    /**
    * Save as Draft method
    * 
    * @param string|null $id Article id.
    * @return \Cake\Http\Response|null Redirects to index.
    * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    */
    public function saveAsDraft($id = null) 
    {
        $article = $this->Article->get($id);
        $article->status = "draft";
        
        if ($this->Article->save($article)) {
            $this->Flash->success(__('The article has been saved as a draft.'));
        } else {
            $this->Flash->error(__('The article could not be saved as a draft. Please, try again.'));
        }
        
        return $this->redirect(['action' => 'index']);
    }
    
    /**
    * Archive method
    * 
    * @param string|null $id Article id.
    * @return \Cake\Http\Response|null Redirects to index.
    * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    */
    public function archive($id = null) 
    {
        $article = $this->Article->get($id);
        $article->status = "archived";
        
        if ($this->Article->save($article)) {
            $this->Flash->success(__('The article has been archived.'));
        } else {
            $this->Flash->error(__('The article could not be archived. Please, try again.'));
        }
        
        return $this->redirect(['action' => 'index']);
    }
}
