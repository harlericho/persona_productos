<?php

require_once '../data/crudProducts.php';
$obj = new CrudProducts();
$datos = $obj->_viewsProducts();
$tabla = '<table class="table">
            <thead>
            <tr class="font-weight-bold">
                 <th scope="col">#</th>
                 <th scope="col">Names</th>
                 <th scope="col">Prices</th>
                 <th scope="col">Quantity</th>
                 <th scope="col">Image</th>
                 <th scope="col">Accions</th>
            </tr>
        </thead>
        <tbody>';
$datostabla = "";
foreach ($datos as $key => $value) {
    $datostabla = $datostabla . '<tr>
                               <th scope="row">'.$value['PRO_ID'].'</th>
                               <th>'.$value['PRO_NAMES'].'</th>
                               <th>'.$value['PRO_PRICE'].'</th>
                               <th>'.$value['PRO_QUANTITY'].'</th>
                               <th><img src="data:image/jpg;base64, '.base64_encode($value['PRO_IMAGE']).'" width="50" height="50"/></th>
                               <td>
                               <buttom type="submit" title="Modify" class="btn btn-primary btn-sm"
                               data-toggle="modal" data-target="#exampleModalEdit"
                                    onclick="getData('.$value['PRO_ID'].')">
                                   <i class="fa fa-check"></i>
                               </buttom>
                               <buttom type="submit" title="Delete" class="btn btn-danger btn-sm"
                               data-toggle="modal" data-target="#exampleModalDelete"
                               onclick="deleteData('.$value['PRO_ID'].')">
                                   <i class="fa fa-trash"></i>
                               </buttom>
                               </td>
                               </tr>';
}
echo $tabla.$datostabla.' </tbody></table>';
