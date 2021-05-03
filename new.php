<form action='displayInterest.php' method ='POST'>
    <p>Principal
        <input type = 'text' name ='principal' maxlength='20'/>
    </p>
    <p>Interest Rate
        <input type='text' name='interestRate' maxlength = '20'/>
    </p>
    <p>Term
        <input type='text' name='term' maxlength='20'/>
    </p>
    <input type='submit' value='Calculate Interest'/>
</form>
<?php
    $principal = $_REQUEST['principal'];
    $interestRate = $_REQUEST['interestRate'];
    $term = $_REQUEST['term'];

    $MIR = $interestRate / 12;
    $MI = $principal / $MIR;
    $MB = $principal + $MI;

    $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September','October', 'November', 'December');

    for($i = 0; $i < 13; $i++){ 
        $MI += $month[0];
        echo($MI);
        echo('</br>');
    }
?>
