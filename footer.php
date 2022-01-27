</body>


</html>
<!--éventuellement un pied de page-->
<footer>
  <?php

  echo ("Date de votre première visite: " . $_SESSION['dateFirstVisit']);?>
  <br>
    <?php echo("Nombre de pages visitées: " . $_SESSION['countViewPage']); ?>

    <br>
    cv - Diane Binsztok
</footer>
