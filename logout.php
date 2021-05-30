<?php

// menghancurkan $_SESSION["pelanggan"]
session_destroy();

echo "<div class='alert alert-primary'>Logout sukses</div>
<meta http-equiv='refresh' content='1;url=login.php'>";

