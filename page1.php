<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratory1</title>
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
        <h1>უწყისის ფორმა </h1>
        <input type="text" name="saxeli"> - სახელი
        <br>
        <input type="text" name="gvari"> - გვარი
        <br>
        <input type="text" name="tanamdeboba"> - თანამდებობა
        <br>
        <input type="number" name="xelfasi"> - ხელფასი
        <br>
        <button name="send_post">SEND POST</button>
    </form>
    <br>
    <hr>
    <br>

    <?php
        if(isset($_POST['send_post']) && !empty($_POST['saxeli']) && !empty($_POST['gvari'])&& !empty($_POST['tanamdeboba']) && !empty($_POST['xelfasi'])){
    ?>
    <table>
        <tr>
            <th>სახელი</th>
            <th>გვარი</th>
            <th>თანამდებობა</th>
            <th>ხელფასის რაოდენობა</th>
            <th>დაკავებული საშემოსავლო</th>
            <th>დარიცხული ხელფასი</th>
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
                    echo $_POST['tanamdeboba'];
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['xelfasi'];
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['xelfasi']*0.2;
                ?>
            </td>
            <td>
                <?php
                    echo $_POST['xelfasi']-$_POST['xelfasi']*0.2;
                ?>
            </td>
        </tr>
    </table>
    <?php
        }
    ?>
</body>
</html>