<?php
    function set_Cookie(String $nom,$val){
        setcookie($nom, $val, time() + (86400*30));
    }
    function unset_cookie(String $nom){
        $comp = false;
        
        if(isset($_COOKIE[$nom])){
            setcookie($nom, "", time() - 30);
            $comp = true;
        }
        return $comp;
    }
    function start_session(){
        if(session_start()===PHP_SESSION_NONE)
        session_start();
    }
    function set_session(String $nom,$val){
        session_start();
        $_SESSION[$nom] = $val;
    }
    function get_session(String $nom){
        session_start();
        return $_SESSION[$nom];
    }

    function unset_session(){
        start_session();
        session_unset();
        session_destroy();
    }

    function is_session(String $nom){
        session_start();

        $isset = isset($_SESSION[$nom]);
        
        return $isset;
    }
?>