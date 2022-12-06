<?php

namespace App\Repository;

interface UserInterface
{


    public function getAll();


    public function find($id);


    public function delete($id);
}