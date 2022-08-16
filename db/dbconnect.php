/*bellow class is for the database operations.
Seperate functions are created to each operation that interracts with the database.
*/

<?php
class Dbconnect
{
    private function connect()
    {
        // Create connection
        $server = "localhost:3306";
        $user = "srikanth";
        $pass = "Robinhood456@1986";
        $db = "phpdemo";
        $conn = mysqli_connect($server, $user, $pass, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    public function num_rows($sql)
    {

        $conn = $this->connect();
        $result = $conn->query($sql);
        $num_rows = $result->num_rows;
        $conn->close();
        return $num_rows;
    }

    public function register_user($firstname, $lastname, $username, $password, $level)
    {
        $conn = $this->connect();

        $sql = "insert into users(firstname,lastname,username,password,level) values('$firstname','$lastname','$username','$password','$level')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    public function user_login($username, $password)
    {
        $sql = "select * from users where username='$username'&&password='$password'";
        $conn = $this->connect();
        $resultset = $conn->query($sql);
        $num_rows = $resultset->num_rows;
        $conn->close();
        return $num_rows;
    }
    public function select($sql)
    {
        $conn = $this->connect();
        $resultset = $conn->query($sql);
        return $resultset;
    }
    public function edituser_username($username)
    {
    }
}
