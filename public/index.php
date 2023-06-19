<?php include '../includes/converter.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="index.php" method="post">
        <label for="amount">Amount in Euros</label>
        <input type="number" id="amount" name="amount" value="<?php echo htmlspecialchars($amount); ?>">

        <label for="currency">Currency</label>
        <input type="text" id="currency" name="currency" value="<?php echo htmlspecialchars($currency); ?>">

        <button type="submit">Convert</button>
    </form>

    <?php if (isset($errorMessage)): ?>
        <div class="error">
            <?php echo $errorMessage; ?>
        </div>
    <?php elseif (isset($result)): ?>
        <div class="result">
            <?php echo $amount; ?> EUR = <?php echo round($result, 2); ?> <?php echo $currency; ?> (rate: <?php echo $conversionRate; ?>)
        </div>
    <?php endif; ?>
</body>
</html>
