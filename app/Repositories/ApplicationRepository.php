<?php

namespace App\Repositories;

use App\Models\Application;
use App\InterfacesApplicationRepositoryInterface;

class ApplicationRepository implements ApplicationRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function index(){
        return Application::all();
    }

    public function getById($id){
       return Application::findOrFail($id);
    }

    public function store(array $data){
       return Application::create($data);
    }

    public function update(array $data,$id){
       return Application::whereId($id)->update($data);
    }
    
    public function delete($id){
       Application::destroy($id);
    }
}
