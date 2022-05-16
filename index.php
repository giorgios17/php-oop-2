<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-shop</title>
</head>

<body>
    <!--     
    L'e-commerce vende prodotti per gli animali.
    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i
    prodotti.
    Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento
    dell'e-commerce. Il focus è sulla parte di slide condivisa oggi su Drive.
    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare
    (es. da maggio ad agosto). -->

    <?php
    include 'entities/class.php';

    $product = new Product('croccantini', 35, 'cibo');
    var_dump($product);

    $user = new User('gino','via calzolaio 3', '0256295962', 2020);
    echo('<p>costo totale '.$user->totalPrice().'€</p>');
    // $account = new Account('manuele','via reggio campi 13', '985969421', 2023);
    // echo('<p>sconto account registrato '.$account->totalPrice().'€</p>');

    $payment = new Payment('gino','via calzolaio 3', '0256295962', 2020);
    $payment->yearOfExpireCc = 2021;
    var_dump($payment);
    echo($payment->paymentCheck());





    ?>



</body>

</html>