<?php 
  function check_user($user, $pass) {
        $sql = "SELECT * FROM account WHERE user = '{$user}' AND pass = '{$pass}'";
        return pdo_query_one($sql);
  }

  function insert_account($data) {
      //có sai sql thì vào đây sửa
      $sql = "INSERT INTO account({$data['attribute']}) 
                          VALUES ({$data['values']})";
      pdo_execute($sql);
  }

  function load_all_accounts() {
    $sql = "SELECT * FROM account ORDER BY id";
    return pdo_query($sql);
  }

  function update_account($id, $user, $pass, $email, $address, $tel, $role) {
    $sql      = " UPDATE 
                      Account
                  SET 
                      user      = '{$user}', 
                      pass      = '{$pass}', 
                      email     = '{$email}', 
                      address   = '{$address}', 
                      tel       = '{$tel}',
                      role      = '{$role}'
                  WHERE 
                      id = '{$id}'
                ";
    pdo_execute($sql);
  }

  function update_account_phone_address($id, $tel, $address) {
    $sql      = " UPDATE 
                      account
                  SET 
                      address   = '{$address}', 
                      tel       = '{$tel}'
                  WHERE 
                      id = '{$id}'
                ";
    pdo_execute($sql);
  }

  function insert_profile($firstname, $surname, $country, $region, $account_id, $gender) {
    $sql      = " INSERT INTO
                      profileAccount(firstname, surname, country, region, account_id, gender)
                  VALUES
                      ('{$firstname}', '{$surname}', '{$country}', '{$region}', '{$account_id}', '{$gender}')
    ";
    pdo_execute($sql);
  }

  function update_profile($firstname, $surname, $country, $region, $account_id, $gender) {
    $sql      = " UPDATE 
                      profileaccount
                  SET 
                      firstname      = '{$firstname}', 
                      surname        = '{$surname}', 
                      country        = '{$country}', 
                      region         = '{$region}',
                      gender         = '{$gender}'
                  WHERE
                      account_id     = '{$account_id}'
                ";
    pdo_execute($sql);
  }

  function load_one_profile($account_id) {
    $sql     = "SELECT 
                    a.id, 
                    a.email,
                    a.address,
                    a.tel,
                    pro.firstname,
                    pro.surname,
                    pro.country,
                    pro.region,
                    pro.gender ";
    $sql     .= "FROM 
                    account as a INNER JOIN profileAccount as pro ";
    $sql     .= "ON 
                    a.id = pro.account_id ";
    $sql     .= "WHERE                
                    a.id = '{$account_id}'";
    $profile  = pdo_query_one($sql);
    if(is_array($profile)) {
      return $profile;
    } 
    return -1;
  }

  function delete_account($id) {
    $sql = "DELETE FROM account WHERE id = '$id'";
    pdo_execute($sql);
  }
