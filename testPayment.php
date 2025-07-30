<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

require_once "PaymentAdapter.php";
require_once "StripeControl.php";

$stripe = new StripeControl();

$stripeAdapter = new PaymentAdapter($stripe);

//test adapter pattern
echo "<h1>Test Stripe Payment: </h1>";
echo "<br>";

$stripeAdapter->setAmount(134500);
$stripeAdapter->setCardCVVNo("070");
$stripeAdapter->setCardExpMonth(12);
$stripeAdapter->setCardExpYear(2030);
$stripeAdapter->setCreditCardNo(1300230045006500);
$stripeAdapter->setCustomerName("Jia Qian");

echo "Amount: RM" . $stripeAdapter->getAmount() . "<br>";
echo "Card CVV No: " . $stripeAdapter->getCardCVVNo() . "<br>";
echo "Card Expiry Month: " . $stripeAdapter->getCardExpMonth() . "<br>";
echo "Card Expiry Year: " . $stripeAdapter->getCardExpYear() . "<br>";
echo "Credit Card No: " . $stripeAdapter->getCreditCardNo() . "<br>";
echo "Customer Name: " . $stripeAdapter->getCustomerName() . "<br>";


?>
</body>
</html>







