<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdsResources Controller
 *
 * @property \App\Model\Table\AdsResourcesTable $AdsResources
 *
 * @method \App\Model\Entity\AdsResource[] paginate($object = null, array $settings = [])
 */
class AdsResourcesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $adsResources = $this->paginate($this->AdsResources);

        $this->set(compact('adsResources'));
        $this->set('_serialize', ['adsResources']);
    }

    /**
     * View method
     *
     * @param string|null $id Ads Resource id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adsResource = $this->AdsResources->get($id, [
            'contain' => []
        ]);

        $this->set('adsResource', $adsResource);
        $this->set('_serialize', ['adsResource']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adsResource = $this->AdsResources->newEntity();
        if ($this->request->is('post')) {
            $adsResource = $this->AdsResources->patchEntity($adsResource, $this->request->getData());
            if ($this->AdsResources->save($adsResource)) {
                $this->Flash->success(__('The ads resource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ads resource could not be saved. Please, try again.'));
        }
        $this->set(compact('adsResource'));
        $this->set('_serialize', ['adsResource']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ads Resource id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adsResource = $this->AdsResources->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adsResource = $this->AdsResources->patchEntity($adsResource, $this->request->getData());
            if ($this->AdsResources->save($adsResource)) {
                $this->Flash->success(__('The ads resource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ads resource could not be saved. Please, try again.'));
        }
        $this->set(compact('adsResource'));
        $this->set('_serialize', ['adsResource']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ads Resource id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adsResource = $this->AdsResources->get($id);
        if ($this->AdsResources->delete($adsResource)) {
            $this->Flash->success(__('The ads resource has been deleted.'));
        } else {
            $this->Flash->error(__('The ads resource could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
