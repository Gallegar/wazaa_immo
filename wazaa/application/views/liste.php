

    <div><br><br>
        <a href='<?= site_url("produits/ajouter") ?>' title="lien vers le formulaire d'ajout">
            <button type="submit" class="col-12 btn alert-primary p-3"><strong>ajouter un produit</strong>
            </button>
        </a><br>
    <br>
    </div>
    
    <div class="card-columns">
    <?php
    foreach ($liste_annonce as $row) { ?>
        <div class="card">
            <ul class="list-group list-group-flush">
                <a href="<?= site_url('annonce/modifier/'.$row->an_id);?>">
                    <img src='<?= base_url("assets/images/".$row->an_photo.".jpg");?>' class="card-img-top responsive image">
                </a>
                <p class="align-middle text-center"><strong>localisation : </strong><?= $row->an_local; ?></p>
                <p class="align-middle text-center"><strong>Prix :</strong><?= $row->an_prix;?>€</p>
            </ul>

            <div class="card-body align-middle text-center">
                <a href="<?= site_url('annonce/delete/'.$row->an_id);?>">
                    <button class="btn btn-outline-danger">Suprimer</button>
                </a>
                
                <a href="<?= site_url('annonce/modifier/'.$row->an_id);?>">
                    <button class="btn btn-outline-info">En savoir plus</button>
                </a>

                <p class="text-muted align-middle text-center"><?= $row->an_d_ajout;?></p>

            </div>
        </div>
    <?php
    } ?>
    </div>