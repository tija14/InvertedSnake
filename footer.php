<?php
  $d = explode("/", trim($path, "/"));
  $srcUrl = '../source.php?dir=' . end($d) . '&amp;file=' . basename($_SERVER["PHP_SELF"]) . '#file';
?>

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</div>
<footer id="footer">
<a href='<?=$srcUrl?>'>Källkod</a>
<a href="redovisning.php">Redovisning</a>

</footer>

</body>
</html>