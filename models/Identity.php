<?php


namespace models;


class Identity
{
    public $login;
    public $password;

    public function __construct($_login, $_password)
    {
        $this->login = strip_tags($_login);
        $this->password = strip_tags($_password);
    }

    public function Register()
    {
        $hash = password_hash($this->password, PASSWORD_DEFAULT);
        $csv = fopen(ROOT . '/upload/csv.csv', 'a');
        $str = "$this->login;$hash\n";
        fwrite($csv, $str);
        fclose($csv);
    }

    public function Login()
    {
        $csvRows = explode("\n", file_get_contents(ROOT . '/upload/csv.csv'));

        $keys = explode(";", array_shift($csvRows));

        $auth = [];

        foreach ($csvRows as $csvRow){
            $row = explode(";", $csvRow);
            $auth[] = array_combine($keys, $row);
        }

        foreach ($auth as $key=>$value)
        {
            if ($value['LOGIN'] == $this->login and password_verify($this->password, $value['PASSWORD']))
            {
                $_SESSION['auth'] = true;
                header($_POST['redirect']);
            }
        }
    }
}