<?php
$con = new mysqli('localhost:3307', 'root', 'root', 'mybank');
define('bankname', 'MCB Bank', true);
$ar = $con->query("select * from userAccounts,branch where id = '$_SESSION[managerId]' AND userAccounts.branch = branch.branchId");
$userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>