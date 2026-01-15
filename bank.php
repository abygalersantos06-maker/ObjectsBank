<?php
include 'classes/account.php';
include 'classes/customer.php';
include 'includes/header.php';

/* Step 7 */
$acc = [
    new Account(20989113, 'Checking', -20),
    new Account(20336821, 'Savings', 500),
    new Account(20985578, 'Payroll', 1700),
    new Account(20887154, 'Time Deposit', 30000)
];

/* Step 8 */
$cus = new Customer('Abygale', 'Santos', $acc);
?>

<h2>NAME: <?php echo strtoupper($cus->getFullName()); ?></h2>

<table>
    <thead>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($cus->acc as $acc): ?>
        <tr>
            <td><?php echo $acc->accNum; ?></td>
            <td><?php echo $acc->accType; ?></td>

            <?php if ($acc->balance >= 0): ?>
                <td class="credit">
                    ₱<?php echo number_format($acc->balance, 2); ?>
                </td>
            <?php else: ?>
                <td class="overdrawn">
                    ₱<?php echo number_format($acc->balance, 2); ?>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<?php include 'includes/footer.php'; ?>
