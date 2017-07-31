<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdsLink Controller
 *
 * @property \App\Model\Table\AdsLinkTable $AdsLink
 *
 * @method \App\Model\Entity\AdsLink[] paginate($object = null, array $settings = [])
 */
class AdsLinkController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AdsContent']
        ];
        $adsLink = $this->paginate($this->AdsLink);

        $this->set(compact('adsLink'));
        $this->set('_serialize', ['adsLink']);
    }

    /**
     * View method
     *
     * @param string|null $id Ads Link id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adsLink = $this->AdsLink->get($id, [
            'contain' => ['AdsContent']
        ]);

        $this->set('adsLink', $adsLink);
        $this->set('_serialize', ['adsLink']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adsLink = $this->AdsLink->newEntity();
        if ($this->request->is('post')) {
            $adsLink = $this->AdsLink->patchEntity($adsLink, $this->request->getData());
            if ($this->AdsLink->save($adsLink)) {
                $this->Flash->success(__('The ads link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ads link could not be saved. Please, try again.'));
        }
        $adsContent = $this->AdsLink->AdsContent->find('list', ['limit' => 200]);
        $this->set(compact('adsLink', 'adsContent'));
        $this->set('_serialize', ['adsLink']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ads Link id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adsLink = $this->AdsLink->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adsLink = $this->AdsLink->patchEntity($adsLink, $this->request->getData());
            if ($this->AdsLink->save($adsLink)) {
                $this->Flash->success(__('The ads link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ads link could not be saved. Please, try again.'));
        }
        $adsContent = $this->AdsLink->AdsContent->find('list', ['limit' => 200]);
        $this->set(compact('adsLink', 'adsContent'));
        $this->set('_serialize', ['adsLink']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ads Link id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adsLink = $this->AdsLink->get($id);
        if ($this->AdsLink->delete($adsLink)) {
            $this->Flash->success(__('The ads link has been deleted.'));
        } else {
            $this->Flash->error(__('The ads link could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
