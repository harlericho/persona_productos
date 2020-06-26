<?php include_once "config.php";

class CrudProducts extends Connection
{
    static function _viewsProducts()
    {
        $sql = "SELECT * FROM tbl_products WHERE PRO_STATUS='A'";
        $query = Connection::_connect()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    static function _addProducts($datos)
    {
        $sql = "INSERT INTO tbl_products (PER_ID,PRO_NAMES,PRO_PRICE,PRO_QUANTITY,PRO_IMAGE,PRO_STATUS) 
        VALUES(:idperso,:names,:price,:quantity,:imagen,:status)";
        $query = Connection::_connect()->prepare($sql);
        $query->bindParam(':idperso', $datos['idperso'], PDO::PARAM_INT);
        $query->bindParam(':names', $datos['names'], PDO::PARAM_STR);
        $query->bindParam(':price', $datos['price'], PDO::PARAM_STR);
        $query->bindParam(':quantity', $datos['quantity'], PDO::PARAM_INT);
        $query->bindParam(':imagen', $datos['imagen'], PDO::PARAM_LOB);
        $query->bindParam(':status', $datos['status'], PDO::PARAM_STR_CHAR);
        return $query->execute();
    }

    static function _editProductsImage($datos1)
    {
        $sql = "UPDATE tbl_products SET PRO_NAMES=:names,PRO_PRICE=:price,PRO_QUANTITY=:quantity,PRO_IMAGE=:imagen WHERE PRO_ID=:id";
        $query = Connection::_connect()->prepare($sql);
        $query->bindParam(':names', $datos1['names'], PDO::PARAM_STR);
        $query->bindParam(':price', $datos1['price'], PDO::PARAM_STR);
        $query->bindParam(':quantity', $datos1['quantity'], PDO::PARAM_INT);
        $query->bindParam(':imagen', $datos1['imagen'], PDO::PARAM_LOB);
        $query->bindParam(':id', $datos1['id'], PDO::PARAM_INT);
        return $query->execute();
    }
    static function _editProductsOutImage($datos)
    {
        $sql = "UPDATE tbl_products SET PRO_NAMES=:names,PRO_PRICE=:price,PRO_QUANTITY=:quantity WHERE PRO_ID=:id";
        $query = Connection::_connect()->prepare($sql);
        $query->bindParam(':names', $datos['names'], PDO::PARAM_STR);
        $query->bindParam(':price', $datos['price'], PDO::PARAM_STR);
        $query->bindParam(':quantity', $datos['quantity'], PDO::PARAM_INT);
        $query->bindParam(':id', $datos['id'], PDO::PARAM_INT);
        return $query->execute();
    }
    static function _deleteProducts($id)
    {
        $sql = "UPDATE tbl_products SET PRO_STATUS='I' WHERE PRO_ID=:id";
        $query = Connection::_connect()->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        return $query->execute();
    }

    static function _getDataId($id)
    {
        $sql = "SELECT p.PRO_ID, p.PRO_NAMES,p.PRO_PRICE,p.PRO_QUANTITY,p.PRO_IMAGE
         FROM tbl_products p WHERE p.PRO_ID=:id";
        $query = Connection::_connect()->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }
}
