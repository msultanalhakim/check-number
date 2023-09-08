<html>
    <head>
        <title>Check Number</title>
        <style>
            h1{
                font-family: 'Poppins', sans-serif;
                font-size: 30px;
                font-weight: bold;
                color: #1f2122;
                margin-bottom: 25px;
            }
            table{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            td{
                padding:5px;
            }
            label{
                color:#1f2122;
                font-weight: 400;
            }
            .container{
                margin-top:60px;
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .form{
                background:url(nima-sarram-DMu_QAkPKnc-unsplash.png);
                background-size:cover;
                text-align: center;
                padding: 60px;
                width: 380px;
                height: 430px;
                border-radius: 23px;
            }
            .submit{
                background-color: #fff;
                font-weight: 400;
                border-radius: 12px;
                border-color: #e75e8d;
            }

            .submit:hover{
                font-weight: 400;
                background-color: #90B1DB;
                color: #1f2122;
                transition: all ease-in-out 0.1s;
            }
            
            input[type=text], input[type=submit] {
                padding: 5px 12px 5px 12px;
                border: solid 1px #888;
                border-radius: 6px;
            }

            .footer{
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <?php
            if(!empty($_POST['submit'])){
                $firstnum = $_POST['firstnum'];
                $secondnum = $_POST['secondnum'];
            }   
        ?>
        <div class="container">
            <form name="checknum" action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="form">
                <h1>Check Number</h1>
                <table border="0" align="center">
                    <tr>
                        <td><label for="firstnum">First number</label></td>
                        <td><input type="text" name="firstnum" value="<?php if(!empty($_POST['submit'])){echo $firstnum;}?>"></td>
                    </tr>
                    <tr>
                        <td><label for="secondnum">Second number</label></td>
                        <td><input type="text" name="secondnum" value="<?php if(!empty($_POST['submit'])){echo $secondnum;}?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Check number" class="submit"></td>
                    </tr>
                    <tr>
                        <td><label for="evennum">Even number</label></td>
                        <td><input type="text" name="evennum" value="<?php
                            if(!empty($_POST['submit'])){
                                if($firstnum == $secondnum){echo "There's no even number";}
                                elseif($firstnum+2 == $secondnum){echo "There's no even number";}
                                elseif($secondnum < $firstnum){echo "There's no even number";}
                                elseif($firstnum+1==$secondnum){echo "There's no even number";}
                                else{
                                    for($i=0;$i<$secondnum;$i++){
                                        if($i>$firstnum && $i%2==0) {
                                            echo $i . " ";
                                        }
                                    }
                                }
                            }
                        ?>" readonly></td>

                    </tr>
                </table>
            </form>
        </div>
        <span class="footer">&#169; Muhammad Sultan Alhakim. All Rights Reserved</span>
    </body>
</html>