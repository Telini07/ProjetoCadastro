<?php
if(session_status() != PHP_SESSION_ACTIVE)
{
    session_cache_expire(60); // 60 MINUTOS para a sessão expirar.
    session_start();
}
?>