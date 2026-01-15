<?php
include "classes/Account.php";
include "classes/Customer.php";
include "includes/header.php";


// Step 7
$accounts = [
    new Account("20622745", "Savings Account", 19999),
    new Account("20982183", "Checking Account", -2670),
    new Account("24233543", "Payroll Account", 9000),
    new Account("23242694", "Certificate of Deposits", 50000)
];

// Step 8
$customer = new Customer("Kylle Raphael", "Sunga", $accounts);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Step 9 -->
    <h2><?php echo $customer->getFullName(); ?>’s Accounts</h2>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <!-- Steps 10/11/12/13/14/15 -->
        <?php foreach ($customer->accounts as $account): ?>
            <tr>
                <td><?php echo $account->accountNumber; ?></td>
                <td><?php echo $account->accountType; ?></td>

                <?php if ($account->balance >= 0): ?>
                    <td class="credit">
                        ₱<?php echo number_format($account->balance, 2); ?>
                    </td>
                <?php else: ?>
                    <td class="overdrawn">
                        ₱<?php echo number_format($account->balance, 2); ?>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php include "includes/footer.php"; ?>

</body>
</html>
