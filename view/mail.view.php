<?php include('../view/header.php') ?>
<link rel="stylesheet" href="../view/css/mail.css" type="text/css" />

<?php
	require_once '../view/baseMenuFnct.php';
	$texte=$dao->getInvitation($idM);
?>

  <form class="" action="mail.ctrl.php" method="post">

    <div class="form-horizontal col-sm-offset-3">
      <div class="form-group">
        <label for="from" class="col-sm-1">From : </label>
        <div class="col-sm-5">
          <input type="email" id="from" class="form-control" placeholder="example@mail.com" required>
        </div>
      </div>

      <div class="form-group">
        <label for="for" class="col-sm-1">For : </label>
        <div class="col-sm-5">
          <input type="email" id="for" class="form-control" placeholder="example@mail.com" required>
        </div>
      </div>

      <div class="form-group">
        <label for="message" class="col-sm-12">Message : </label>
        <div class="col-sm-6">
          <textarea name="message" id="message" class="form-control" rows="15" cols="200"><?=$texte?></textarea>
        </div>
      </div>

      <div class="row">
        <button class="col-sm-6 btn btn-primary" name="actSend">Envoyer</button>
      </div>
    </div>

  </form>
</div>
<?php include('../view/scripts.php') ?>
<?php include('../view/footer.php') ?>