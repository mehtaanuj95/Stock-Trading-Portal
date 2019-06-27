<table class="table table-striped">
    <thead>
        <tr>
            <td><strong>Transaction Type</strong></td>
            <td><strong>Date/Time</strong></td>
            <td><strong>Symbol</strong></td>
            <td><strong>Shares</strong></td>
            <td><strong>Price</strong></td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($hist as $row): ?>
        <?= "<tr>" ?>
            <?= "<td>".$row["transaction"]."</td>" ?>
            <?= "<td>".$row["timestamp"]."</td>" ?>
            <?= "<td>".$row["symbol"]."</td>" ?>
            <?= "<td>".$row["shares"]."</td>" ?>
            <?= "<td>$".number_format($row["price"],2)."</td>" ?>
        <?= "</tr>" ?>
        <?php endforeach ?>
    </tbody>
</table>
