<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$inputValue = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["clear"])) {
        $inputValue = "";
    } elseif (isset($_POST["back"])) {
        $inputValue = substr($_POST['input'], 0, -1);
    } elseif (isset($_POST["equal"])) {
        try {
            $inputValue = eval ("return " . $_POST["input"] . ";");
        } catch (Throwable $e) {
            $inputValue = "ERROR";
        }
    } else {
        foreach ($_POST as $key => $value) {
            // echo $value;
            if ($inputValue === "ERROR") {
                $inputValue = $value;
            } else {
                $inputValue .= $value;
            }


        }
    }
}
?>


<body>
    <div class="main">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="wrap">
                <div class="input">
                    <input type="text" name="input" id="input" value="<?php echo htmlspecialchars($inputValue); ?>"
                        readonly>
                </div>
                <div class="btns">
                    <button type="submit" name="clear" value="C">C</button>
                    <button type="submit" name="mod" value="%">%</button>
                    <button type="submit" name="back" value="Back">Back</button>
                    <button type="submit" name="divide" value="/">/</button>
                    <button type="submit" name="num7" value="7">7</button>
                    <button type="submit" name="num8" value="8">8</button>
                    <button type="submit" name="num9" value="9">9</button>
                    <button type="submit" name="mul" value="*">*</button>
                    <button type="submit" name="num4" value="4">4</button>
                    <button type="submit" name="num5" value="5">5</button>
                    <button type="submit" name="num6" value="6">6</button>
                    <button type="submit" name="sub" value="-">-</button>
                    <button type="submit" name="num1" value="1">1</button>
                    <button type="submit" name="num2" value="2">2</button>
                    <button type="submit" name="num3" value="3">3</button>
                    <button type="submit" name="plus" value="+">+</button>
                    <button type="submit" name="num00" value="00">00</button>
                    <button type="submit" name="num0" value="0">0</button>
                    <button type="submit" name="dec" value=".">.</button>
                    <button type="submit" name="equal" value="=">=</button>
                </div>
            </div>
    </div>
    </form>

</body>

</html>