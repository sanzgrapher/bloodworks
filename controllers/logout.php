<!-- unset sessions  -->
<?php
session_unset();
session_destroy();
redirect(HOSTNAME);
die();


?>