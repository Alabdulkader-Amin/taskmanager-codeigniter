<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    private function checkAuth()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/login');
        }
        return null;
    }
    
    public function index()
    {
        $redirect = $this->checkAuth();
        if ($redirect) return $redirect;
        
        $model = new TaskModel();
        $tasks = $model->getTasksByUser(session()->get('user_id'));
        
        return view('tasks/index', [
            'username' => session()->get('username'),
            'tasks' => $tasks
        ]);
    }
    
    public function add()
    {
        $redirect = $this->checkAuth();
        if ($redirect) return $redirect;
        
        if ($this->request->getMethod() === 'POST') {
            $model = new TaskModel();
            $model->insert([
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'status' => 'en cours',
                'user_id' => session()->get('user_id')
            ]);
            return redirect()->to('/');
        }
        
        return view('tasks/add');
    }
    
    public function edit($id)
    {
        $redirect = $this->checkAuth();
        if ($redirect) return $redirect;
        
        $model = new TaskModel();
        $task = $model->getTaskByIdAndUser($id, session()->get('user_id'));
        
        if (!$task) {
            return redirect()->to('/');
        }
        
        if ($this->request->getMethod() === 'POST') {
            $model->update($id, [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'status' => $this->request->getPost('status')
            ]);
            return redirect()->to('/');
        }
        
        return view('tasks/edit', ['task' => $task]);
    }
    
    public function delete($id)
    {
        $redirect = $this->checkAuth();
        if ($redirect) return $redirect;
        
        $model = new TaskModel();
        $task = $model->getTaskByIdAndUser($id, session()->get('user_id'));
        
        if ($task) {
            $model->delete($id);
        }
        
        return redirect()->to('/');
    }
}