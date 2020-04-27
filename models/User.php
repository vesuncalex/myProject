<?php
namespace models;
use DataBase;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service_locator;

class User
{
    const TABLE = 'users';
    public function create($email, $password,$lastName,$firstName)
    {

        $attributes = ['email' => $email, 'password' => $password, 'firstName' => $firstName, 'lastName' => $lastName];

        $db = new DataBase();
        return $db->create(self::TABLE, $attributes);
    }
//
//    public function delete( string $table, int $id){
//        $delate = new DataBase();
//        $delate->delete($table, $id);
//
//    }

//    public function getId( $email)
//    {
//        $id = new DataBase();
//        echo $id;
//        return $id->getId(self::TABLE,$email);
//
//
//    }
    public function select($columns, $where)
    {
        $db = new DataBase();
        return $db->select(self::TABLE, $columns, $where)->fetch();

    }

    public function update($email, $password, int $id)
    {
        $attributes = ['email' => $email, 'password' => $password];
        $update = new DataBase();
        $update->update(self::TABLE, $attributes,$id);

    }

}
