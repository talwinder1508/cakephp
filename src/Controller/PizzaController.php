<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pizza Controller
 *
 * @property \App\Model\Table\PizzaTable $Pizza
 */
class PizzaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('pizza', $this->paginate($this->Pizza));
        $this->set('_serialize', ['pizza']);
    }

    /**
     * View method
     *
     * @param string|null $id Pizza id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pizza = $this->Pizza->get($id, [
            'contain' => []
        ]);
        $this->set('pizza', $pizza);
        $this->set('_serialize', ['pizza']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pizza = $this->Pizza->newEntity();
        if ($this->request->is('post')) {
            $pizza = $this->Pizza->patchEntity($pizza, $this->request->data);
            if ($this->Pizza->save($pizza)) {
                $this->Flash->success(__('The pizza has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pizza could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pizza'));
        $this->set('_serialize', ['pizza']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pizza id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pizza = $this->Pizza->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pizza = $this->Pizza->patchEntity($pizza, $this->request->data);
            if ($this->Pizza->save($pizza)) {
                $this->Flash->success(__('The pizza has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pizza could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pizza'));
        $this->set('_serialize', ['pizza']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pizza id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pizza = $this->Pizza->get($id);
        if ($this->Pizza->delete($pizza)) {
            $this->Flash->success(__('The pizza has been deleted.'));
        } else {
            $this->Flash->error(__('The pizza could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
