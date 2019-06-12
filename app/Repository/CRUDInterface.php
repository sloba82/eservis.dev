<?php

namespace App\Repository;

interface CRUDInterface {

    public function save($params);

    public function getAll();

    public function getById($id);

    public function update($params, $id);

    public function delete($id);
}

