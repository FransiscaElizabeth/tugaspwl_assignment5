function login($email, $password){
    $link = createMySQLConnection();
    $query = "SELECT  id, name, email FROM user WHERE email = ? AND password = ?";
    $stmt = $link->prepare();
    $stmt->bindParam(1, $email);
    $stmt->bindParam(1, $password);
    $stmt->execute;
    $user = $stmt->fetch()
    $link = null;
    return $user
}