<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
  private $arrayClientes = array(
       array(
           'nombre' => 'Neo',
           'imagen' => 'https://st-listas.20minutos.es/images/2012-04/326595/3476031_640px.jpg?1334069801',
           'fecha_nacimiento' => '06/01/1972',
           'correo' => 'neo@matrix.org',
           'numero' =>'0'
       ),
       array(
           'nombre' => 'Morfeo',
           'imagen' => 'https://img-cdn.hipertextual.com/files/2019/08/hipertextual-version-joven-morfeo-apareceria-matrix-4-2019877912.jpg?strip=all&lossy=1&quality=65&resize=740%2C490&ssl=1',
           'fecha_nacimiento' => '05/03/1997',
           'correo' => 'morfeo@matrix.org',
           'numero' =>'1'
       )
   );

  public function getIndex()
  {
    return view('catalog/index', array('arrayClientes'=>$this->arrayClientes));
  }
  public function getShow($id)
  {
    //var_dump(array('clientes'=>$this->arrayClientes[$id]));

    return view('catalog/show', array('clientes'=>$this->arrayClientes[$id]));
  }
  public function getCreate()
  {
    return view('catalog/create');
  }

  public function getEdit($id)
  {
    return view('catalog/edit', array('id'=>$id));
  }
}
