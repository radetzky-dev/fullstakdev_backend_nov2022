<?php

/**
 * showProducts
 *
 * @param  mixed $render
 * @return void
 */
function showProducts($render)
{
    $bodyTable = "";
    if (is_array($render) || is_object($render)) {
        foreach ($render as $value => $key) {
            $bodyTable = $bodyTable .
                '<tr>
                    <td>' . $key['product_code'] . '</td>
                    <td>' . $key['product'] . '</td>
                    <td>' . $key['description'] . '</td>
                    <td>' . $key['product_q'] . '</td>
                    <td>' . $key['product_prize'] . '</td>
                    <td>' . $key['category'] . '</td>
                    <td>
                    <a href="insert_product.php?id=' . $key['product_code'] . '">Modifica</a>
                    <a href="savedata.php?id=' . $key['product_code'] . '&op=delete" onclick="return confirmAction();">Elimina</a>
                    </td>
                </tr>';
        }
    }
    return $bodyTable;
}


function showProductsMain($render)
{

    if (is_array($render) || is_object($render)) {
        foreach ($render as $value => $key) {
?>
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?= $key['product']; ?></h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center me-3">
                                <small><?= $key['category']; ?></small>
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
