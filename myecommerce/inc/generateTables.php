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
                    <td><button class="btn btn-primary">MODIFICA</button><button class="btn btn-danger">ELIMINA (chiede conferma js) </button></td>
                </tr>';
        }
    }
    return $bodyTable;
}