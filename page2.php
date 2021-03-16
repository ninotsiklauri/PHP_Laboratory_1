<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratory2</title>
    <style>
        form{
            border: solid 1px;
            margin: auto;
            width: 500px;
            padding: 10px;
        }
        form input{
            margin: 10px;
        }
        table{
            margin: auto;
            border: solid 1px;
            border-collapse: collapse; 
            text-align: center;
        }
        table td, th{
            border: solid 1px;
            padding: 10px
        }
    </style>
</head>
<body>

    <form method="post">
        <h1>ნიშნების უწყისის ფორმა </h1>
        <input type="text" name="saxeli"> - სახელი
        <br>
        <input type="text" name="gvari"> - გვარი
        <br>
        <input type="text" name="kursi"> - კურსი
        <br>
        <input type="text" name="semestri"> - სემესტრი
        <br>
        <input type="number" name="nishani"> - მიღებული ნიშანი
        <br>
        <input type="text" name="leqtori"> - ლექტორი
        <br>
        <input type="text" name="dekani"> - დეკანი
        <br>
        <button name="send_post">SEND POST</button>
    </form>
    <br>
    <hr>
    <br>

    <?php
        if(isset($_POST['send_post']) && !empty($_POST['saxeli']) && !empty($_POST['gvari']) && !empty($_POST['kursi']) && !empty($_POST['semestri'])
        && !empty($_POST['nishani']) && !empty($_POST['leqtori']) && !empty($_POST['dekani'])){
    ?>
    <table>
        <tr>
            <th>სახელი</th>
            <th>გვარი</th>
            <th>კურსი</th>
            <th>სემესტრი</th>
            <th>მიღებული ნიშანი</th>
            <th>შეფასება</th>
            <th>ლექტორი</th>
            <th>დეკანი</th>
        </tr>
        <tr>
            <td>
                <?php
                    echo $_POST['saxeli'];
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['gvari'];
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['kursi'];
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['semestri'];
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['nishani'];
                ?>
            </td>
            <td>
                <?php
                    if ($_POST['nishani'] > 0 && $_POST['nishani'] < 41){
                        echo "F";
                    }else if ($_POST['nishani'] > 40 && $_POST['nishani'] < 51){
                        echo "FX";
                    }else if ($_POST['nishani'] > 50 && $_POST['nishani'] < 61){
                        echo "E";
                    }else if ($_POST['nishani'] > 60 && $_POST['nishani'] < 71){
                        echo "D";
                    }else if ($_POST['nishani'] > 70 && $_POST['nishani'] < 81){
                        echo "C";
                    }else if ($_POST['nishani'] > 80 && $_POST['nishani'] < 91){
                        echo "B";
                    }else if ($_POST['nishani'] > 90){
                        echo "A";
                    }
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['leqtori'];
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['dekani'];
                ?>
            </td>
        </tr>
    </table>
    <?php
        }
    ?>
</body>
</html>