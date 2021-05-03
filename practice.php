<html>
    <head>
        <title>Exam</title>
    </head>
    <body>
        <form action='' method ='POST'>
            <p>Enter loan:
                <input type = 'text' name ='principal'/>
            </p>
            <p>Enter rate:
                <input type='text' name='interest' />
            </p>
            <p>Enter payment:
                <input type='text' name='payment'/>
            </p>
            <input type='submit' value='submit'/>
            <input type='reset' value='clear'/>
            <br>
            <br>
           <?php
               if(isset($_POST['submit']));{
                   $p = $_POST['principal'];
                   $i = $_POST['interest'];
                   $pay = $_POST['payment'];
                   $i = $p * $i;
                   $a = ($p + $i) - $pay;

                   printf($a);
                   // for($year=1;$year <=7;$year++)
                   // {
                   //     echo "year ". '\t' . "principal" . '\t' . "interest" . '\t' . "payment" .'\n';
                   //     echo "$year". '\t' . "$p". '\t' . "$i". '\t' . "$pay";
                   // }
                   
               }
          ?>

        </form>
        
    </body>
</html>
