<?php
require_once('../util/database.php');
require_once('../util/new_user.php');
require_once('../util/newcustomer.php');
?>

<html>
    <title>Paw-radise</title>
    <body>
    <h1>Contact</h1>
    <form method='POST'>
        <h3>Name: <input type="text" name="cName" 
        value="<?php echo $customer->getCustomerName(); ?>"></h3>
        <h3>Email: <input type="text" name="cEmail"
        value="<?php echo $customer->getCustomerEmail(); ?>"></h3>
        <h3>Phone Number: <input type="text" name="cNumber"
        value="<?php echo $customer->getCustomerEmail(); ?>"></h3>
        <h3>Message: <input type="text" name="cMessage"
        value="<?php echo $customer->getCustomerMessage(); ?>"></h3>
        <input type="submit" value="Save" name="save">
    </form>
    </body>
</html>