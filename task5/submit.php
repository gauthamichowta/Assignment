<?php
$errMsg = "";
if (empty($_POST["text"])) {
    $errMsg .= "<li>Required Text</<li>";
} else {
    $text = test_input($_POST["text"]);
    if (!ctype_alnum($text)) {
        $errMsg .= "<li>Text should contain only alphabets or numbers</<li>";
    }
}

if (empty($_POST["age"])) {
    $errMsg .= "<li>Required Int</<li>";
} else {
    $age = test_input($_POST["age"]);
    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        $errMsg .= "<li>Enter a valid age</<li>";
    }
}

if (empty($_POST["name"])) {
    $errMsg .= "<li>Required String</<li>";
} else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*/", $name)) {
        $errMsg .= "<li>character not allowed</<li>";
    }
}

if (empty($_POST["email"])) {
    $errMsg .= "<li>Required Email</<li>";
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errMsg .= "<li>The email address is incorrect</<li>";
    }
    if (preg_match("/(hotmail|gmail|yahoo)/i", $email)) {
        $errMsg .= "<li>Accepts only company email ids</<li>";
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (empty($errMsg)) {
    $msg = "Validated Successfully";
    echo json_encode(['code' => 200, 'msg' => $msg]);
    exit;
}
echo json_encode(['code' => 404, 'msg' => $errMsg]);
