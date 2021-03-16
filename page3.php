<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratory3</title>
    <style>
        form{
            border: solid 1px;
            margin: auto;
            width: 700px;
            padding: 10px;
        }
        form input{
            margin: 7px;
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
        .questions{
            border-bottom: solid black 1px;
            margin-top: 10px;
            padding: 10px
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>გამოცდა</h1>
        <div class="questions">
            <span>1. გადაიყვანეთ რიცხვი (11011100)2 თვლის ორობითი სისტემიდან რვაობითში.</span>
            <br><br>
            <input type="radio" name="question1" value="1">
            <label for="1">334</label><br>
            <input type="radio" name="question1" value="2">
            <label for="2">123</label><br>
            <input type="radio" name="question1" value="3">
            <label for="3">443</label> <br>
            <input type="radio" name="question1" value="4">
            <label for="4">678</label>
        </div>
        <div class="questions">
            <span>1. გადაიყვანეთ რიცხვი (1101100)2 თვლის ორობითი სისტემიდან თექვსმეტობითში.</span>
            <br><br>
            <input type="radio" name="question2" value="1">
            <label for="1">D4</label><br>
            <input type="radio" name="question2" value="2">
            <label for="2">D5</label><br>
            <input type="radio" name="question2" value="3">
            <label for="3">6C</label> <br>
            <input type="radio" name="question2" value="4">
            <label for="4">8D</label>
        </div>
        <div class="questions">
            <span>1. გადაიყვანეთ რიცხვი (0,0110101011)2 თვლის ორობითი სისტემიდან თექვსმეტობითში. </span>
            <br><br>
            <input type="radio" name="question3" value="1">
            <label for="1">0,6AC</label><br>
            <input type="radio" name="question3" value="2">
            <label for="2">0,1AB</label><br>
            <input type="radio" name="question3" value="3">
            <label for="3">0,353</label> <br>
            <input type="radio" name="question3" value="4">
            <label for="4">0,843</label>
        </div>
        <div class="questions">
            <span>4. რომელ მეხსიერებას აღნიშნავს ჩანაწერი RAM?</span>
            <br><br>
            <textarea name="question4" cols="97" rows="7"></textarea>
        </div>
        <div class="questions">
            <span>5. რომელია კვებაზე დამოკიდებული მეხსიერება, რომელშიც ის პროგრამები და მონაცემები იწერება, რომლებსაც მოცემულ მომენტში ამუშავებს პროცესორი?</span>
            <br><br>
            <textarea name="question5" cols="97" rows="7"></textarea>
        </div>
        <br>
        <button name="submit">SUBMIT</button>
        <br>
        <br>

        <?php
        $answers = array("1", "3", "2", "ოპერატიულ მეხსიერებას", "ოპერატიული მეხსიერება");
        if (isset($_POST['submit'])) {
            $count = 0;
            for ($i = 0; $i <= sizeof($answers) - 1; $i++) {
                if ($answers[$i] == $_POST["question" . $i + 1]) {
                    $count++;
                }
            }
        ?>
            <div>
                <b>სწორი პასუხების რაოდენობა : <?= $count ?>/<?= sizeof($answers)?></b>
            </div>
        <?php
        }
    ?>
    </form>
</body>
</html>