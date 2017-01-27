<?php

namespace UmpactoSoluciones\Tools\Repositories;

use Illuminate\Support\Facades\Auth as Auth;

abstract class Repository
{

  protected $model;

  protected function clean($string) {
     $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
     return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
  }

  public function nameGenerator($string)
  {
    $name = "";
    $string = mb_strtolower($string,'UTF-8');
    $name = $this->clean($string);
    return $name;
  }

  public function create($data)
  {
      $data['user_id'] = Auth::user()->id;
      if($this->model->create($data) != null)
      {
          return true;
      }else {
        return false;
      }
  }

  public function update($id, $data)
  {
    $m = $this->model->find($id);
    $data['user_id'] = Auth::user()->id;
    return $m->update($data);

  }

  public function delete($id)
  {
    $m =  $this->model->find($id);
    return $m->delete();
  }

  public function find($id)
  {
    return $this->model->find($id);
  }

  public function all()
  {
    return $this->model->all();
  }

}
