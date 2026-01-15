<!--
Cedric Nathan E. Palo
CYB-201
-->
<?php include 'classes/Account.php'?>
<?php include 'classes/Customer.php'?>


<!--Info to be added-->
    <?php 
    include 'includes/header.php';

    //Step 7
    $accounts = [
    new Account(43213212, 'Checking', 3000),
    new Account(24122512, 'Savings', 45000),
    new Account(53214903, 'Hangouts', -500),
    new Account(53214903, 'Retirement', 30000)
    ];

    //Step 8
    $customer = new Customer('Cedric Nathan', 'Palo', 'cedpalo@gmail.com', 'cedricpalo', $accounts);

    ?>
    <div class="floating-border">
    <!--Step 9-->
    <h2>Name: <?= $customer->getFullName() ?></h2>
    <table>
        <tr>
            <th>ACCOUNT NUMBER</th>
            <th>ACCOUNT TYPE</th>
            <th>BALANCE<th>
        </tr>
        <?php 
        //Step 10
        foreach ($customer->accounts as $account) {
            $balance = $account->getBalance();
        ?>
        <tr>
            <td><?= $account->number ?></td>
            <td><?= $account->type ?></td>
            <?php
            //Step 11-15
            
            if ($balance >= 0) 
                echo '<td class = "credit">₱'. $balance.'</td>';
            else
                echo '<td class = "overdrawn">₱'. $balance.'</td>';
            
            ?>
        </tr>
        <?php } ?>
    </table>
    </div>  
<?php include 'includes/footer.php'?>
    
