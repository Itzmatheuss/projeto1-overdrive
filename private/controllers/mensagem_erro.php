<?php
if(isset($_SESSION['mensagem_erro'])):
?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong> <?= $_SESSION['mensagem_erro'];?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
    unset($_SESSION['mensagem_erro']);
    endif;
?>