<?php

class Auth
{
    /**properties */
    private $pdo;
    private $user;
    private ?string $confirm;
    private ?string $hashPass;
    /**constructor */
    public function __construct($pdo, $user, ?string $confirm, ?string $hashPass)
    {
        $this->pdo = $pdo;
        $this->user = $user;
        $this->confirm = $confirm;
        $this->hashPass = $hashPass;
    }

    /**methods */

    public function register()
    {
        //query the DB for username and email
        $sqlCheckDup = "SELECT * FROM users WHERE email = :email or username = :username";
        $stmt = $this->pdo->prepare($sqlCheckDup);
        $stmt->execute(['email' => $this->user->email, 'username' => $this->user->username]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if (!empty($result)) {
            //if email exists, alert that the email is already in use
            foreach ($result as $r) {
                if ($r['email'] == $this->user->email) {
                    echo "<script type='text/javascript'>alert('Your email has an account. Recover?');
                window.location.replace('/public');
                </script>";
                    // sleep(15);
                    // header("location:/public");
                }
                if ($r['username'] == $this->user->username) {
                    echo "<script type='text/javascript'>alert('You chose poorly, try another username.');
                window.location.replace('/public');
                </script>";
                    // sleep(15);
                    // header('location:/public');
                }
            }
        } else {
            if ($this->user->password === $this->user->confirm) {
                /**
                 * set session vars
                 */
                // $_SESSION['username'] = $this->user->username; //TODO JB I don't think we want to set session vars for registration???
                // $_SESSION['password'] = $this->user->password;
                $sqlAddUser = "INSERT into users (email, username, password) values (:email, :username, :password)";
                $stmtAddUser = $this->pdo->prepare($sqlAddUser);
                $stmtAddUser->execute(['email' => $this->user->email, 'username' => $this->user->username, 'password' => $this->hashPass]);
                echo "  <script type='text/javascript'>
                    alert('Congrats, you are now registered! redirecting for initial login'); window.location.replace('/public');
                    </script>";
            } else {
                echo "  <script type='text/javascript'>
                    alert('Passwords do not match!!'); window.location.replace('/public');
                    </script>";
            }
        }
    }

    //TODO JB: do we want to make this better by using params?
    public function login() {}

    /**getters and setters */
}
