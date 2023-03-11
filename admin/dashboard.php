<?php
session_start();

require_once "../connect/db_connect.php";

echo "Dashboard";

?>

  <!-- Header includes -->
  <?php
    include 'includes/header.php';
  ?>

  <!-- Navigation includes -->
  <?php
    include 'includes/nav.php';
  ?>



  <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
      <strong>You are most welcome,</strong> <?= $_SESSION['message']; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <!-- Prevent the going back after logout -->
  <script type="text/javascript">
    function preventBack(){
        window.history.forward()
    };
    setTimeout("preventBack()", 0);
    window.onunload=function(){
        null;
    }
  </script>
  <!-- Prevent the going back after logout -->


  <!-- Footer includes -->
  <?php
    include 'includes/footer.php';
  ?>


</body>
</html>