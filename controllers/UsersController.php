<?php

namespace App\Controller;

session_start();

use App\Core\App;

class UsersController
{

   
    public function signup()
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        // $birthday = $POST['month'] . '-' . $POST['day'] . '-' . $POST['year'];
        // $gender = $POST['gender'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        // check for empty field
        if (empty($firstname) || empty($lastname) ||  empty($pwd) || empty($email) ) {
            //die(var_dump("1"));
            return view('register');
            exit();
        } else {
            // check if input characters are valid
            if (!preg_match("/^[a-z A-Z]*$/", $firstname) || !preg_match("/^[a-z A-Z]*$/", $lastname)) {
                //die(var_dump("2"));
                return view('register');
                exit();
            } else {
                // check if email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    //die(var_dump("3"));
                    return view('register');
                    exit();
                } else {
                    // get result set from database
                    $resultSet = App::get('database')->checkExit('users', $email);
                    //die (var_dump($resultSet));
                    $resultSet1 = App::get('database')->checkLogin('users', $email);
                    die (var_dump($resultSet1));
                    $countRow = count($resultSet);
                    //if there are one more row, do nothing
                    if ($countRow>0) {
                        return view('register');
                        exit();
                    } else {
                        //die(var_dump("5"));
                        // hashing the password
                        $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
                        App::get('database')->insert('users', [
                            'user_first' => $_POST['firstname'],
                            'user_last' => $_POST['lastname'],
                            'user_email' => $_POST['email'],
                            'user_pwd' => $hashed_password,
                        ]);
                        // register successed then log in  
                        $resultSet1 = App::get('database')->checkLogin('users', $_POST['email']);
                        //die(var_dump($resultSet1['user_id']));
                        $_SESSION['user_id'] = $resultSet['user_id'];
                        $_SESSION['user_first'] = $resultSet['user_first'];
                        $_SESSION['user_last'] = $resultSet['user_last'];
                        $_SESSION['user_email'] = $resultSet['user_gmail'];
                        return redirect('');
                    }
                }
            }
            
        }
    }

    public function login () {

        $uemail = $_POST['email'];
        $pwd = $_POST['pwd']; 
        $resultSet = App::get('database')->checkLogin('users', $uemail);
        $countRow = count($resultSet);
        //die(var_dump($resultSet));
        //if there are one more row, do nothing
        if (!$resultSet) {
            //die(var_dump('1'));
            return view('index');
            exit();
            
        } else {
            //die(var_dump($resultSet['user_pwd']));
            $dehashedpwd = password_verify($pwd, $resultSet['user_pwd']);
            //die(var_dump($dehashedpwd));
            if ($dehashedpwd==false) {
                //die(var_dump('3'));
                return view('index');
                exit(); 
            } elseif ($dehashedpwd==true) {
                $_SESSION['user_id'] = $resultSet['user_id'];
                $_SESSION['user_first'] = $resultSet['user_first'];
                $_SESSION['user_last'] = $resultSet['user_last'];
                $_SESSION['user_email'] = $resultSet['user_gmail'];
                return redirect('');
                exit();
            }
        }
       
    }

    public function logout () {
        session_start();
        session_unset();
        session_destroy();
        return redirect('');
        exit(); 
    }

    

}