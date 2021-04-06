<?php

class dataAccess{
    #region Properties
    /**
     * Instance Variable
     *
     * @var RDBMS instance
     */
    protected $instance;

    /**
     * Host Variable
     *
     * @var string
     */
    protected $host;

    /**
     * User Variable
     *
     * @var string
     */
    protected $user;

    /**
     * Password Variable
     *
     * @var string
     */
    protected $password;

    /**
     * Database Variable
     *
     * @var string
     */
    protected $database;
    #endregion

    #region Constructor
    public function __construct(string $user, string $host, string $password, string $database, ?array $datas = null){
        if(is_null($datas)){
            !empty($user) ? setUser($user) : setUser();
            !empty($host) ? setHost($host) : setHost();
            !empty($password) ? setPassword($password) : setPassword();
            !empty($database) ? setDatabase($database) : setDatabase();
        }else{
            setFromArray($datas);
        }
    }
    #endregion


    #region Getters
    public function getHost(){ return $this->host; }
    public function getUser(){ return $this->user; }
    public function getPassword(){ return $this->password; }
    public function getDatabase(){ return $this->database; }
    public function getInstance(){ return $this->instance; }
    #endregion

    #region Setters
    protected function setInstance($instance = null){ !is_null($instance) ? $this->instance = $instance : null; }
    protected function setHost($host = null){ !is_null($host) ? $this->host = $host : null; }
    protected function setUser($user = null){ !is_null($user) ? $this->user = $user : null; }
    protected function setPassword($password = null){ !is_null($password) ? $this->password = $password : null; }
    protected function setDatabase($database = null){ !is_null($database) ? $this->databas = $database : null; }
    protected function setFromArray(array $datas){
        foreach($datas as $k => $v){
            $k = ucfirst($k);
            switch($k){
                case "Host":
                    setHost($v);
                case "User":
                    setUser($v);
                case "Password":
                    setPassword($v);
                case "Database":
                    setDatabase($v);
            }
        }
    }
    #endregion

    #region Database Functions
    public function connect(){
        if(is_null($this->instance)){
            $mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
            if(mysqli_connect_errno){
                return null;
            }else{
                setInstance($mysqli);
                return $this->instance;
            }
        }else{
            return $this->instance;
        }
    }

    public function closeDb(){
        if(!is_null($this->instance)){
            $this->instance->close();
        }
    }
    #endregion

    #region Login Functions
    #endregion

    #region Register Functions
    #endregion

    #region Market Functions
    #endregion

    #region Comments Function
    #endregion

    #region Review Functions
    #endregion

    #region Items Functions
    #endregion

    #region Admin Functions
    #endregion
}