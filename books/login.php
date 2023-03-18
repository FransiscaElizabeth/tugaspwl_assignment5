<?php
$loginPressed = filter_input(INPUT_POST, 'btnlogin');
if(isset($loginPressed)){
    $email = filter_input(INPUT_POST, 'txtEmail');
    $password = filter_input(INPUT_POST, 'txtPassword');
    if(trim($email) == '' || trim($password) = ''){
        echo '<div>Please input your email and password!</div>';
    } else {
        $user = login($email, $password);
        if($user['email'] == $email){
            $_SESSION['registered_user'] = true;
            $_SESSION['registered_name'] = $user['name'];
            header('location:index.php');
        }else{
            echo '<div>Invalid Email or Password</div>'
        }
    }
}
?>
<form method="post" action="login">
    <div class="Username">
        <label for="username">Username</label>
        <input type="text" placeholder="Your Username">
    </div>
    <div class="Password">
        <label for="password">Password</label>
        <input type="password" placeholder="Your Password">
    </div>
    <div class="login">
        <button>LOGIN</button>
    </div>
</form>