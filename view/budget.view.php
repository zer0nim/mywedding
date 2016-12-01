<?php include('../view/header.php') ?>
<?php require_once '../view/baseMenuFnct.php'; ?>

<link rel="stylesheet" href="../view/css/budget.css" type="text/css" />

<div class="text-center">
    <div class="row row-margin">
        <p>Budget globale : <b id="budgetglobale"><?= $budgetglobale ?></b> €</p>
        <p>Budget globale dépensé : <b id="budgetglobaledepense"><?= $budgetglobaledepense ?></b> €</p>
        <p>Budget globale restant : <b id="budgetglobalerestant"><?= $budgetglobalerestant ?></b> €</p>
    </div>
    
    <div id="divboutonajouter" class="row col-sm-4 col-sm-offset-4">
        <button class="btn btn-primary" onClick="ajouter('<?= $idmariage ?>')">Ajouter un budget</button>
    </div>
    
    <?php
    if ($tabbudget != null){
        foreach ($tabbudget as $idbudget => $budget) {
            ?>
            <div id="<?= $idbudget ?>" class="row-margin div-budget col-sm-5">
                <div class="row col-sm-12">
                    <p><b id="description<?= $idbudget ?>"><?= $budget->getDescription() ?></b> : <b id="value<?= $idbudget ?>"><?= $budget->getValue() ?></b> €</p>
                </div>
                <table id="tab<?= $idbudget ?>" class="row scroll form-control">
                    <tr class="row"><th class="champ-description-depense col-sm-12 text-center">Description</th><th class="col-sm-12">Prix</th></tr>
                    <?php
                    $tabdepense = $budget->getTabdepense();
                    if ($tabdepense != null){
                        foreach ($tabdepense as $depense) {
                            ?>
                            <tr id="dep<?= $depense->getId() ?>" class="depense<?= $idbudget ?> row"><td><?= $depense->getDescription() ?></td><td class="text-right"><?= $depense->getValue() ?> €</td></tr>
                            <?php
                        }
                    }
                    ?>
                </table>
                <table class="row table-margin col-sm-10">
                    <tr class="row"><td class="text-center">Total dépensé : </td><td id="totaldepense<?= $idbudget ?>" class="text-right"><?= $budget->getTotalDepense() ?> €</td><td></td></tr>
                    <tr class="row"><td class="text-center">Budget restant : </td><td class="text-right"><?= $budget->getTotalRest() ?> €</td><td></td></tr>
                </table>
                <div class="row">
                    <button class="btn-d col-sm-5 col-sm-offset-1 btn btn-primary" onClick="supprimer('<?= $idbudget ?>', '<?= $budget->getIdMariage() ?>')">Supprimer</button>
                    <button class="btn-d col-sm-5 btn btn-primary" onclick="modifier('<?= $idbudget ?>', '<?= $budget->getIdMariage() ?>')">Modifier</button>
                </div>
            </div>
            <?php
        }
    }
    ?>

</div>


<?php include('../view/scripts.php') ?>
<script src="../view/js/budget.js"></script>

<?php include('../view/footer.php') ?>
