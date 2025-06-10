<?php
session_reset();
session_destroy();
header("Location: login.php");
exit;