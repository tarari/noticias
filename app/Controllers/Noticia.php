<?php
    namespace App\Controllers;

    use CodeIgniter\RESTful\ResourceController;
    use CodeIgniter\API\ResponseTrait;
    use App\Models\NoticiaModel;
    
    class Noticia extends ResourceController
    {
    use ResponseTrait;
    // todas las noticias
    public function index(){
    $model = new NoticiaModel();
    $data['noticias'] = $model->orderBy('id', 'DESC')->findAll();
    return $this->respond($data);
    }
}