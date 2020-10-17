<?php
if(isset($_POST['cookiename']))
{
setcookie($_POST['cookiename'], $_POST['cookievalue'], time() + (86400 * 24 * 365), "/");
}
?>