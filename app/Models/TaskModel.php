<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'status', 'user_id'];
    protected $returnType = 'object';
    
    public function getTasksByUser($userId)
    {
        return $this->where('user_id', $userId)->orderBy('id', 'DESC')->findAll();
    }
    
    public function getTaskByIdAndUser($id, $userId)
    {
        return $this->where('id', $id)->where('user_id', $userId)->first();
    }
}