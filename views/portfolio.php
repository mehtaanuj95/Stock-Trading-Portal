<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="text-align:center;">Symbol</th>
                <th style="text-align:center;">Name</th>
                <th style="text-align:center;">Shares</th>
                <th style="text-align:center;">Price</th>
                <th style="text-align:center;">TOTAL</th>
            </tr>
        </thead>
        
        <tbody>
        
            <?php foreach ($positions as $position):  ?>
            
                <tr>
                    <td> <?= $position["symbol"] ?> </td>
                    <td> <?= $position["name"] ?> </td>
                    <td> <?= $position["shares"] ?> </td>
                    <td> <?= $position["price"] ?> </td>
                    <td> <?= $position["price"] * $position["shares"] ?> </td>
                </tr>
              
            
            <?php endforeach ?>
                
            <tr>
                <td style="text-align:center;"><b>CASH</b></td>
                <td colspan="3" style="text-align:left;">&nbsp</td>
                <td> <?=  number_format($cash , 2, '.', ''); ?></td>
            </tr>    
        </tbody>
    </table>
</div>
