<?php 

function emptyInputSignup($username, $email, $password, $passwordRepeat){
    $result;
    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        $result =true;
    }else{
        $result = false;
    } 
    return $result;
}

function invalidUsername($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    } else {
        $result = false;
    } 
    return $result;
}
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result =false;
    } 
    return $result;
}
function passwordMacth($password, $passwordRepeat){
    $result;
    if($password !== $passwordRepeat){
        $result = true;
    } else {
        $result =false;
    } 
    return $result;
}
function usernameExists($conn, $username, $email){
    $sql = "SELECT*FROM users WHERE username =? OR email =?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row= mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $email, $username, $password){
    $sql= 'INSERT INTO users (email, username, password) VALUES(?, ?, ?, ?);';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../signup.php?error=stmtfailed");
        exit();
    }
    $passwordHashed= password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $passwordHashed);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../signup.php?error=none");
        exit();
}
function emptyInpuLogin($username, $password){
    $result;
    if(empty($username) ||empty($password)){
        $result =true;
    }else{
        $result = false;
    } 
    return $result;
}
function loginUser($conn, $username,$password){
    $usernameExists = usernameExists($conn, $username, $password);
    if(usernameExists === false){
        header("location:../login.php?error=wronglogin");
        exit();
    }
    $hashedPassword = $usernameExists["password"];
    $checkPassword = password_verify($password,$hashedPassword);
    if($checkPassword === false){
        header("location:../login.php?error=wronglogin");
        exit();
    }
    elseif ($checkedPassword === true) {
        session_start();
        $_SESSION["id"]= $usernameExists["id"];
        $_SESSION["username"]= $usernameExists["username"];
        header("location:../index.php");
        exit();
    }
}