<?php
/*bellow class is for the database operations.
Seperate functions are created to each operation that interracts with the database.
*/
class Dbconnect
{
    private function connect() //connects the database
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

    public function num_rows($sql) //fetch resultset according to sql query and returns the row count
    {

        $conn = $this->connect();
        $result = $conn->query($sql);
        $num_rows = $result->num_rows;
        $conn->close();
        return $num_rows;
    }

    public function register_user($firstname, $lastname, $username, $password, $level) //inserts user data to users table
    {
        $conn = $this->connect();

        $sql = "insert into users(firstname,lastname,username,password,level) values('$firstname','$lastname','$username','$password','$level')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    public function user_login($username, $password)/*checks if the username and password matches a record in the database. 
    then returns the number of records. Only if the count is 1, the username and password is correct.*/
    {
        $sql = "select * from users where username='$username'&&password='$password'";
        $conn = $this->connect();
        $resultset = $conn->query($sql);
        $num_rows = $resultset->num_rows;
        $conn->close();
        return $num_rows;
    }
    public function select($sql) // selects data from database according to any sql query and returns the resultset
    {
        $conn = $this->connect();
        $resultset = $conn->query($sql);
        return $resultset;
    }
    public function edituser_username($id)
    {
    }
}
