<?php
//require "my_connexion.php";

class users
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $role;
    private $tele;

    function __construct($id="", $nom="",$prenom="",$email="",$password="",$role="",$tele="")
    {
        $this->$id = $id;
        $this->$nom = $nom;
        $this->$prenom = $prenom;
        $this->$email = $email;
        $this->$password = $password;
        $this->$role = $role;
        $this->$tele = $tele;
    }

    function get_id(){
        return  $this->id;
    }

    function set_id($id){
        $this->id=$id;
    }
    function get_nom(){
        return  $this->nom;
    }
    function set_nom($nom){
        $this->nom=$nom;
    }
    function get_prenom(){
        return  $this->prenom;
    }
    function set_prenom($prenom){
        $this->prenom=$prenom;
    }
    function get_email(){
        return  $this->email;
    }
    function set_email($email){
        $this->email=$email;
    }
    function get_password(){
        return  $this->password;
    }
    function set_password($password){
        $this->password=$password;
    }
    function get_role(){
        return  $this->role;
    }
    function set_role($role){
        $this->role=$role;
    }
    function get_tele(){
        return  $this->tele;
    }
    function set_tele($tele){
        $this->tele=$tele;
    }
    // add -- update -- destroy-get--find

    public function save(){
        $conn=new PDO("mysql:host=localhost;dbname=e_commerce","root","");
        $sql = "INSERT INTO users (nom,prenom,email,password,role,tele) VALUES (?,?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$this->nom,$this->prenom, $this->email,$this->password,$this->role,$this->tele]);

        echo "user add avec sucsses";
    }
    public function destroy($d){
        $conn=new PDO("mysql:host=localhost;dbname=e_commerce","root","");
        $sql = "DELETE FROM users WHERE id=$d";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$d]);


    }
    public function update(){
        $conn=new PDO("mysql:host=localhost;dbname=e_commerce","root","");
        $sql = "update  users set nom=?,prenom=?,email=?,password=?,role=?,tele=? where id=?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$this->id,$this->nom,$this->nom,$this->prenom,
            $this->email,$this->password,$this->role,$this->tele]);
        echo "user update avec sucsses";
    }
    public static function get(){
        $conn=new PDO("mysql:host=localhost;dbname=e_commerce","root","");
        $sql = "select * from users";
        $stmt= $conn->prepare($sql);
        $user=$stmt->fetchAll(PDO::FETCH_ASSOC);

    }





    public static function find($id){
        $conn=new PDO("mysql:host=localhost;dbname=e_commerce","root","");
        $sql = "select * from users where id=?";
        $stmt= $conn->prepare($sql);
        $row=$stmt->execute([$id]);
        if(isset($row)){
            $users=new users($row["id"],$row["nom"],$row["prenom"],$row["email"],$row["password"],$row["role"],$row["tele"]);
            echo  $users;
            return $users;
        }
        return null;
    }
    public static function login($email,$password){
        $conn=new PDO("mysql:host=localhost;dbname=e_commerce","root","");
        $sql = "select id from users where $email=? and $password=?";
        $stmt= $conn->prepare($sql);
        $row=$stmt->execute([$email,$password]);
        return users::find($row['idl']);
        echo "user login avec sucsses";
    }



}