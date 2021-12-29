<?php 
    function insert_category($nameItems) {
        $sql = "INSERT INTO category(name) VALUES('$nameItems')";
        pdo_execute($sql);
    }

    function remove_category($idItems) {
        $sql = "DELETE FROM category WHERE id = '$idItems'";
        pdo_execute($sql);
    }

    function update_category($id, $itemName) {
        $sql = "UPDATE category SET name = '$itemName' WHERE id = '$id'";
        @pdo_execute($sql);
    }

    function load_all_categories($keyword = '') {
        $sql = "SELECT * FROM category WHERE 1 ";

        if(!empty($keyword)) {
            $sql .= "AND name LIKE '%{$keyword}%'";
        }

        $sql .= "ORDER BY id DESC";
        return pdo_query($sql);
    }

    function load_category_by_id($id) {
        $sql = "SELECT * FROM category WHERE id = '$id'";
        return pdo_query_one($sql);
    }