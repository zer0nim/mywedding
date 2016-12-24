<?php include('../view/header.php') ?>
<link rel="stylesheet" href="../view/css/inspiration.css" type="text/css"/>

<link rel="stylesheet" type="text/css" href="../view/css/default.css" />
<link rel="stylesheet" type="text/css" href="../view/css/component.css" />

<?php require_once '../view/baseMenuFnct.php'; ?>

<div class="main">
  <ul class="cbp_tmtimeline">
    <li id="newPost">
      <div class="panel panel-default cbp_tmlabel">
        <h2>Nouveau post</h2>
        <div class="panel-heading">
          <select id="postSlctLink" class="form-control">
            <option value="none" selected="selected">Type</option>
            <option value="note">Note</option>
            <option value="link">Lien</option>
            <option value="pict">Photo</option>
          </select>
        </div>
        <div id="newpost" class="panel-body">

          <form id="link" method="post" >
            <label class="control-label" for="textinput">Adresse</label>
            <input type="text" name="adresse" class="form-control" aria-describedby="basic-addon1" required>
            <span class="input-group-addon">Description</span>
            <textarea class="form-control" name="description" id="" name=""></textarea>
            <input type="submit" class="btn btn-default btn-block" value="Ajouter">
          </form>

          <form id="note" method="post" >
            <label class="control-label" for="textinput">Titre</label>
            <input type="text" name="titre" class="form-control" aria-describedby="basic-addon1" required>
            <span class="input-group-addon">Note</span>
            <textarea class="form-control" name="description" id="" name="" required></textarea>
            <input type="submit" class="btn btn-default btn-block" value="Ajouter">
          </form>

          <form id="pict" method="post" enctype="multipart/form-data">
            <label class="control-label" for="textinput" required>Titre</label>
            <input type="text" name="titre" class="form-control" aria-describedby="basic-addon1" required>
            <span class="input-group-addon">Description</span>
            <textarea class="form-control" name="description" id="" name=""></textarea>
            <input type="file" name="image" accept="image/*" required>
            <div id="image_preview" class="col-lg-10 col-lg-offset-2">
              <div class="thumbnail hidden">
                  <img src="http://placehold.it/5" alt="">
                  <div class="caption">
                      <h4></h4>
                      <p></p>
                      <p><button type="button" class="btn btn-default btn-danger">Annuler</button></p>
                  </div>
              </div>
            </div>
            <input type="submit" class="btn btn-default btn-block" value="Ajouter">
          </form>

          <div id="none">
            <p>Veuillez selectioner le type ci-dessus.</p>
          </div>
        </div>
      </div>
    </li>
    <?php printAllInsp($insp); ?>
    <!--
    <li>
      <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>4/10/13</span> <span>18:30</span></time>
      <div class="cbp_tmicon fa fa-paint-brush"></div>
      <div class="cbp_tmlabel">
        <h2><a href="http://www.unbeaujour.fr/">http://www.unbeaujour.fr/</a></h2>
        <p>Un Beau Jour, c’est une équipe de filles (pour le moment, en tout cas !) : Eléonore, Anne-Solange, Florence et Capucine et nous nous sommes donné pour mission, d’accompagner celles ceux qui ont décidé de se dire OUI d’une manière qui leur ressemble, quels que soient leurs attentes, leurs rêves, leur nombre d’invités ou leur budget.</p>
      </div>
    </li>
    <li>
      <time class="cbp_tmtime" datetime="2013-04-11 12:04"><span>4/11/13</span> <span>12:04</span></time>
      <div class="cbp_tmicon fa fa-paint-brush"></div>
      <div class="cbp_tmlabel">
        <h2>Verrerie</h2>
        <p>A chaque verre, un souffle. A chaque création, une présence et une attention. Une tradition qui sera toujours d´avant-garde.</p>
        <img src="../img/3.jpg" width="100%" height="100%">
      </div>
    </li>
    <li>
      <time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>4/13/13</span> <span>05:36</span></time>
      <div class="cbp_tmicon fa fa-paint-brush"></div>
      <div class="cbp_tmlabel">
        <h2>Les cartes Indiscrétions</h2>
        <p>Un questionnaire malicieux et tendre à remplir par chaque invité, idéal pour les convives en manque d’inspiration et qui vous permettra de récolter des dizaines de souvenirs inattendus : des confidences rigolotes, touchantes, surprenantes…</p>
      </div>
    </li>
  -->
  </ul>
</div>

<?php include('../view/scripts.php') ?>
<script src="../view/js/inspiration.js"></script>
<?php include('../view/footer.php') ?>
