<?php

namespace App\Repository;

interface CRUDInterface {

    public function save();

    public function getAll();

    public function getById();

    public function update();

    public function delete();
}

