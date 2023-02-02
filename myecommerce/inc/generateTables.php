<?php 

function showProducts($render){
//  var_dump($render);
$table= '<div>
    <table class="table table-bordered">
    <thead thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>QTY</th>
            <th>Prezzo</th>
            <th>Ctegoria</th>
        </tr>
    </thead>
   <tbody>';
   if (is_array($render) || is_object($render)){
    foreach ($render as $value =>$key){
       
return $table.=  '<tr>
                    <td>'.$key['product_code'].'</td>
                    <td>'.$key['product'].'</td>
                    <td>'.$key['description'].'</td>
                    <td>'.$key['product_q'].'</td>
                    <td>'.$key['product_prize'].'</td>
                    <th>'.$key['category'].'</td>
                    
                </tr>';
            }
                '</tbody>
                </table>
            </div>';
   }

    
}

   
           
   


showProducts('data/products.json');
?>