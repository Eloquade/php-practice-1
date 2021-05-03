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
               if(isset($_POST['submit'])){
                   $p = $_POST['principal'];
                   $i = $_POST['interest'];
                   $pay = $_POST['payment'];
                   $interest = $p * $i;
                   $principle = ($p + $i) - $pay;

                   for($year=0;$year <=7;$year++)
                   {
                       echo "year ". '\t' . "principal" . '\t' . "interest" . '\t' . "payment" .'\n';
                       printf( "$year". '\t' . "$principle". '\t' . "$interest". '\t' . "$pay");
                   }



               }
          ?>

        </form>

    </body>
</html>
