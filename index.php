<?php 
require("h2shead.php"); // standard heading 
 ?>
<title>Test Suite and Demo Page</title>
<script src="./ckeditor/ckeditor.js"></script>

 </head>
<body>
<?php
require("menuBar.php");
echo '<p style="padding:4em;">Here is some text outside of other panels</p>';
require("autoComplete.php");
require("ckeditor.php");
echo '<div style="width:400px">';
require("autoComplete.php");
echo "</div>";
require("execTime.php");
sleep(.1);
require("execTime.php");
sleep(.091);
require("execTime.php");
 ?>

</body>