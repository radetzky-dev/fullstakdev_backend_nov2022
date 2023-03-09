<?php

/**
 * showProducts
 *
 * @param  mixed $render
 * @return void
 */
function showProducts($render)
{
    $bodyTable = "<table class='table table-bordered'>";
    if (is_array($render) || is_object($render)) {
        foreach ($render as $value => $key) {

            $bodyTable = $bodyTable .
                '<tr>
                    <td>' . $key['id'] . '</td>
                    <td>' . $key['name'] . '</td>
                    <td>' . $key['price'] . '</td>
                    <td>' . $key['quantity'] . '</td>
                    <td>' . $key['description'] . '</td>
                    <td></td>
                    <td>' . $key['photo'] . '</td>
               
                    <td>
                    <a href="insert_product.php?id=' . $key['id'] . '">Modifica</a>
                    <a href="savedata.php?id=' . $key['id'] . '&op=delete" onclick="return confirmAction();">Elimina</a>
                    </td>
                </tr>';
        }
    }

    return $bodyTable;
}

function getCategoryName($cat_id)
{
    //TODO
    //db connette e trova con la query il nome della categoria
    //return string NOMECATEGORIA
}


function  showProductsMain($render)
{   

    if (is_array($render) || is_object($render)) {
        foreach ($render as $value => $key) {
?>
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" >
                    <div class="d-flex flex-column h-50 p-5 pb-3 text-white text-shadow-1">
                        <!-- mostrare immagine in base al product code -->
                    <img src="assets/<?= $key['photo'];?>" class="img-fluid" alt="prodotto">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-bg-dark"><?= $key['name']; ?></h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center me-3">
                                <small><?= $key['description']; ?></small> - € 
                                <small><?= $key['price']; ?></small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
<?php
        }
    }
}

/**
 * showCustomers
 *
 * @param  mixed $render
 * @return void
 */
function showCustomers($render)
{
    $bodyTable = "";


    if (is_array($render) || is_object($render)) {
        foreach ($render as $value => $key) {
            $bodyTable = $bodyTable .
                '<tr>
                    <td>' . $key['id'] . '</td>
                    <td>' . $key['name'] . '</td>
                    <td>' . $key['surname'] . '</td>
                    <td>' . $key['username'] . '</td>
                    <td>*****</td>
                    <td>
                    <a href="update_customer.php?id=' . $key['id'] . '">Modifica</a>
                    <a href="delete_customer.php?id=' . $key['id'] . '&op=delete" onclick="return confirmAction();">Elimina</a>
                    </td>
                </tr>';
        }
    }
    return $bodyTable;
}
