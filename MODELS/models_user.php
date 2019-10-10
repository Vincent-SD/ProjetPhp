<?php


include 'model_base.php';



class User
{
    private $pseudo;
    private $password;
    private $mail;
    private $user_id;
    private $state;
    private $phone;
    private $country;
    private $user_date;
    private $gender;



    public function __construct()
    {

    }



    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }


    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @return mixed
     */
    public function getUserDate()

    {
        return $this->user_date;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @param mixed $user_date
     */
    public function setUserDate($user_date)
    {
        $this->user_date = $user_date;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }



    public function register()
    {

        $db = $GLOBALS['db'];
        $this->mail = $_POST['mail'];
        $this->password = $_POST['mdp'];
        $this -> pseudo = $_POST['identifiant'];
        $this -> gender = $_POST['genre'];
        $this -> phone = $_POST['phone'];
        $this -> country = $_POST['pays'];
        $this -> state = 'member';



        $hashedPass = hash('sha256',$this->password);


        $query = 'INSERT INTO USER (mail, pseudo, password, phone, country, user_date, gender, state)
        VALUES (
         \'' . $this->mail . '\' ,
         \'' . $this->pseudo . '\',
         \'' . $hashedPass . '\' ,
         \'' . $this->phone . '\' ,
         \'' . $this->country . '\' ,
         NOW(),
         \'' . $this->gender . '\' ,
         \'' . $this->state . '\'
         )';


        try
        {
            $db->query($query);
            echo '<br/><strong>bonsoir, votre inscription a bien été enregistrée.</strong><br/>';
            echo ' <br/>  <a href=../index.php> Retourner a l\'accueil </a>   ';
        }

        catch (PDOException $e)
        {
            echo $e->getMessage();
        }

//


    }

    public function login()
    {

        session_start();

        $login = $_POST['login'];
        $password = $_POST['mdp'];
        $db = $GLOBALS['db'];
        $hashedPass = hash('sha256',$password);




        $query = "SELECT pseudo , password  FROM USER where USER.pseudo =  '$login'  and USER.password = '$hashedPass' ";
 echo $query;
 exit();
        try
        {
        $db->query($query);
        $_SESSION['isLogin']='ok';
        $_SESSION['login']=$login;
        $_SESSION['password']=$hashedPass;


        header('Location: ../index.php');

        }

    catch (PDOException $e)
    {
        echo $e->getMessage();
    }



    }
}




?>



