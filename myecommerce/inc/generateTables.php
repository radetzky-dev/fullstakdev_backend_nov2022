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
                    <a href="insert_product.php?id='.$key['product_code'].'">Modifica</a>
                    <a href="savedata.php?id='.$key['product_code'].'&op=delete">Elimina</a>
                    </td>
                </tr>';
        }
    }
    return $bodyTable;
}