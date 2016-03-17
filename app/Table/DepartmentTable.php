<?php
namespace App\Table;

use Core\Table\Table;

class DepartmentTable extends Table{

    protected $table = 'department';

    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function ajout($label){
       return $this->query("
       		INSERT INTO department 
       		(label_department,edit_by,creat_at,edit_at)
       		VALUES (?,?,NOW(),NOW());",[$label,1],true);
    }
}