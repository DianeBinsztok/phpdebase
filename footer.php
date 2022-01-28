</body>


</html>
<!--éventuellement un pied de page-->
<footer>

  <?php
  // infos de session: nombre de pages visitées et date de la première visite :
  echo ("Date de votre première visite: " . $_SESSION['dateFirstVisit']);?>
  <br>
    <?php echo("Nombre de pages visitées: " . $_SESSION['countViewPage']); ?>

    <br>
    cv - Diane Binsztok
</footer>
