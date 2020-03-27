<?php
    $param = "?ctrl=getProducts";
    $resultGetCurl = Controllers::getCurlRest($param);
    $resultGetCurl =json_decode($resultGetCurl);
    $productslist="";
    foreach ($resultGetCurl->result as $product){
        $productslist =$productslist .'<tr><td>'.$product->code_produit.'</td>'.
                        '<td>'.$product->nom.'</td>'.
                        '<td>'.$product->categorie.'</td>'.
                        '<td>'.$product->quantite.'</td>'.
                        '<td>'.$product->prix_achat.'</td>'.
                        '<td>'.$product->date_expiration.'</td>'.
                        '<td class="text-center moddel"><div><i class="fas fa-pencil-alt text-warning"></i></div><div><i class="fas fa-times text-danger"></i></div></td></tr>';
    }
?>

<section class="col-xs-12 col-sm-8 col-md-9 col-lg-10 main_component" id="product-list">
    <div>
        <div>
            <h3 class="bg-danger text-light mb-0 p-2">liste des Produits</h3>
        </div>
        <div class="bg-light p-2">
            <table id="products" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Code Produit</th>
                        <th>Désignation</th>
                        <th>Catégorie</th>
                        <th>Quantité</th>
                        <th>Prix D'achat</th>
                        <th>Date Expiré</th>
                        <th>Modifier / Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        echo $productslist;
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Code Produit</th>
                        <th>Désignation</th>
                        <th>Catégorie</th>
                        <th>Quantité</th>
                        <th>Prix D'achat</th>
                        <th>Date Expiré</th>
                        <th>Modifier / Supprimer</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
