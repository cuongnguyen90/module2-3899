<?php

include "Model/M_Reader.php";

class C_Reader
{
   private $model;

   public function __construct()
   {
      $this->model = new M_Reader();
   }

   public function showAll()
   {
      return $this->model->getAll();
   }

   public function deleteReader($value)
   {
      return $this->model->deleteReader($value);
   }

   public function getReader($value)
   {
      return $this->model->getReader($value);
   }

   public function updateData($object,$file)
   {
      return $this->model->updateReader($object,$file);

   }

   public function addReader($value,$file)
   {
      return $this->model->addNewReader($value,$file);
   }
}