<?php
session_start();
if (isset($_SESSION['type'])) {
echo "Session Set<br><br>";
}
if (isset($_SESSION['returnCode']) && $_SESSION['returnCode'] == 0){
echo '<br> <iframe src="Testbuild/index.html" height="100%" width="100%" ></iframe><br><br>';
}
else {
echo "error, plese log in";
}
echo "<a href='logout.php'> <button>Logout </button></a>";
?>