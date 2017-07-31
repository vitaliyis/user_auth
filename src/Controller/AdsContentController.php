<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * AdsContent Controller
 *
 * @property \App\Model\Table\AdsContentTable $AdsContent
 *
 * @method \App\Model\Entity\AdsContent[] paginate($object = null, array $settings = [])
 */
class AdsContentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $adsContent = $this->paginate($this->AdsContent);

        $this->set(compact('adsContent'));
        $this->set('_serialize', ['adsContent']);
    }

    public function addToFile()
    {
        $adsContent = $this->AdsContent->find('all');
        $file = new File('/var/www/html/test.php');

        $this->set(compact('file'));

        foreach ($adsContent as $adsContent):
            $file->append($adsContent);
        endforeach;

        $this->redirect(['action' => 'index']);
    }
    public function readFromFile()
    {
        $file = new File('/var/www/html/test.php');
        $contents = $file->read();
        $file->close();
        $this->set(compact('contents'));
    }

    /**
     * View method
     *
     * @param string|null $id Ads Content id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adsContent = $this->AdsContent->get($id, [
            'contain' => ['AdsLink']
        ]);

        $this->set('adsContent', $adsContent);
        $this->set('_serialize', ['adsContent']);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adsContent = $this->AdsContent->newEntity();
        if ($this->request->is('post')) {
            $adsContent = $this->AdsContent->patchEntity($adsContent, $this->request->getData());
            if ($this->AdsContent->save($adsContent)) {
                $this->Flash->success(__('The ads content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ads content could not be saved. Please, try again.'));
        }
        $this->set(compact('adsContent'));
        $this->set('_serialize', ['adsContent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ads Content id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adsContent = $this->AdsContent->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adsContent = $this->AdsContent->patchEntity($adsContent, $this->request->getData());
            if ($this->AdsContent->save($adsContent)) {
                $this->Flash->success(__('The ads content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ads content could not be saved. Please, try again.'));
        }
        $this->set(compact('adsContent'));
        $this->set('_serialize', ['adsContent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ads Content id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adsContent = $this->AdsContent->get($id);
        if ($this->AdsContent->delete($adsContent)) {
            $this->Flash->success(__('The ads content has been deleted.'));
        } else {
            $this->Flash->error(__('The ads content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
