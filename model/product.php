<?php 
    function load_all_products($keyword = '', $catalog_id = 0) {
        $sql = "SELECT * FROM items WHERE 1 ";

        if($keyword !== '') {
            $sql .= "AND name like '%{$keyword}%'";
        }

        if($catalog_id !== 0) {
            $sql .= "AND category_id = {$catalog_id} ";
        }

        $sql .= " ORDER BY name";

        return pdo_query($sql);
    }
    
    function insert_product($data) {
        $sql = "INSERT INTO items({$data['attribute']}) VALUES({$data['values']})";
        pdo_execute($sql);
    }

    function remove_product($idItems) {
        $sql = "DELETE FROM items WHERE id = '$idItems'";
        pdo_execute($sql);
    }

    function update_product($id, $category_id, $itemName, $price, $description, $img='') {
        if($img != '') {
            $sql      = "UPDATE Items SET category_id = '$category_id', name = '$itemName', price = '$price', description = '$description', img = '$img' WHERE id = '$id'";
        } else {
            $sql      = "UPDATE Items SET category_id = '$category_id', name = '$itemName', price = '$price', description = '$description' WHERE id = '$id'";
        }
        pdo_execute($sql);
    }

    function load_one_product($idProduct) {
        $sql = "SELECT * FROM items WHERE id = '$idProduct'";
        return pdo_query_one($sql);
    }

    function load_category_of_products($idProduct) {
        $sql = "SELECT * FROM category WHERE id = '$idProduct'";
        return pdo_query_one($sql);
    }



