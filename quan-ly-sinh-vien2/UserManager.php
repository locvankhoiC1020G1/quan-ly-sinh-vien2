<?php

include_once 'User.php';

class UserManager
{
    private $accounts;

    public function __construct($accounts)
    {
        $this->accounts = $accounts;
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->accounts, $dataJson);

    }

    public function loadData()
    {
        $dataFile = file_get_contents($this->accounts);
        return json_decode($dataFile);
    }

    public function addUser($user)
    {
        $data = $this->loadData();
        array_push($data, $user);
        $this->saveData($data);
    }

    public function checkLogin($name, $password)
    {
        $users = $this->loadData();
        foreach ($users as $item) {
            if ($name == $item->name) {
                if ($password == $item->password) {
                    header('location: student-managerment.php');
                }
            } else {
                return "Sai mật khẩu hoặc tài khoản";
            }
        }
    }

    /**
     * @return mixed
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @param mixed $accounts
     */
    public function setAccounts($accounts): void
    {
        $this->accounts = $accounts;
    }

}