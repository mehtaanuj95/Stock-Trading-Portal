<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="text-align:center;">Transaction_Type</th>
                <th style="text-align:center;">Stock</th>
                <th style="text-align:center;">Shares</th>
                <th style="text-align:center;">Price</th>
                <th style="text-align:center;">Date</th>
                <th style="text-align:center;">Time</th>
            </tr>
        </thead>
        
        <tbody>
        
            <?php foreach ($transactions as $transaction):  ?>
            
                <tr>
                    <td> <?= $transaction["transaction_type"] ?> </td>
                    <td> <?= $transaction["symbol"] ?> </td>
                    <td> <?= $transaction["shares"] ?> </td>
                    <td> <?= $transaction["price"] ?> </td>
                    <td> <?= $transaction["date"] ?> </td>
                    <td> <?= $transaction["time"] ?> </td>
                </tr>
              
            
            <?php endforeach ?>
                
        </tbody>
    </table>
</div>
