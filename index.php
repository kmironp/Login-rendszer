<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Projektmunka_II</title>
    <style>
        body {
            background: radial-gradient(circle, #A770EF, #CF8BF3, #FDB99B);
            color: #fff;
            font-family: serif;
        }

        h1 {
            color: #fff;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5);
            margin-top: 20px;
        }

        label {
            font-size: 18px;
            font-weight: bold;
            display: block;
            margin-bottom: 0px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            background-color: #f1f1f1;
            margin-bottom: 20px;
            box-sizing: border-box;
            color: #000;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            background-color: #ffd452;
            color: rgb(0, 0, 0);
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #FDB99B;
        }

        .alert {
            display: none;
            margin-top: 20px;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            text-align: center;
        }

        .alert-success {
            background-color: rgba(39, 174, 96, 0.8);
            color: #fff;
        }

        .alert-danger {
            background-color: rgba(192, 57, 43, 0.8);
            color: #fff;
        }
    </style>
</head>

<body>
    <h1>Katona Miron Péter - AX6Z80</h1>
    <div class="container">
        <form action="" method="post">
            <label for="username">Felhasználónév</label>
            <input type="text" id="username" name="username" placeholder="username" required onfocus="if(this.placeholder === 'username') {this.placeholder = ''; this.style.color='#000'}" onblur="if(this.placeholder === '') {this.placeholder = 'username'; this.style.color='#999'}">

            <label for="password">Jelszó</label>
            <input type="password" id="password" name="password" placeholder="password" required onfocus="if(this.placeholder === 'password') {this.placeholder = ''; this.style.color='#000'}" onblur="if(this.placeholder === '') {this.placeholder = 'password'; this.style.color='#999'}">

            <button type="submit">Belépés</button>
            <div class="alert alert-success" id="success" style="background-color: transparent;"></div>
            <div class="alert alert-danger" id="error" style="background-color: transparent;"></div>
        </form>

        <div id="message"></div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Check if the user exists in the data file
            $file = fopen("decated.txt", "r");
            $user_found = false;
            while (!feof($file)) {
                $line = trim(fgets($file));
                if ($line) {
                    list($stored_username, $stored_password) = explode("*", $line);
                    if ($username === $stored_username) {
                        $user_found = true;
                        if ($password === $stored_password) {
                            // Successful login

                            $servername = "localhost";
                            $Username = "root";
                            $password = "";
                            $dbname = "adatok";

                            // Create connection
                            $conn = new mysqli($servername, $Username, $password, $dbname);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Read data based on given username
                            $sql = "SELECT Titkos FROM tabla WHERE Username='$username'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                $titok = "";
                                while ($row = $result->fetch_assoc()) {
                                    $titok = $row["Titkos"];
                                }
                                if ($titok === "piros") {
                                    echo '<script type="text/javascript">
                                    const successAlert = document.getElementById("success");
                                    successAlert.textContent = "Sikeres bejelentkezés!";
                                    successAlert.style.display = "block";
                                    const errorAlert = document.getElementById("error");
                                    errorAlert.style.display = "none";
                                    document.body.style.transition = "background-color 0.5s ease-in-out";
                                    document.body.style.backgroundImage = "radial-gradient(circle, #43C6AC, #191654)";
                                    </script>';
                                } else if ($titok === "zold") {
                                    echo '<script type="text/javascript">
                                    const successAlert = document.getElementById("success");
                                    successAlert.textContent = "Sikeres bejelentkezés!";
                                    successAlert.style.display = "block";
                                    const errorAlert = document.getElementById("error");
                                    errorAlert.style.display = "none";
                                    document.body.style.transition = "background-color 0.5s ease-in-out";
                                    document.body.style.backgroundImage = "radial-gradient(circle, #93F9B9, #1D976C)";
                                    </script>';
                                } else if ($titok === "sarga") {
                                    echo '<script type="text/javascript">
                                    const successAlert = document.getElementById("success");
                                    successAlert.textContent = "Sikeres bejelentkezés!";
                                    successAlert.style.display = "block";
                                    const errorAlert = document.getElementById("error");
                                    errorAlert.style.display = "none";
                                    document.body.style.transition = "background-color 0.5s ease-in-out";
                                    document.body.style.backgroundImage = "radial-gradient(circle, #93F9B9, #1D976C)";
                                    </script>';
                                } else if ($titok === "kek") {
                                    echo '<script type="text/javascript">
                                    const successAlert = document.getElementById("success");
                                    successAlert.textContent = "Sikeres bejelentkezés!";
                                    successAlert.style.display = "block";
                                    const errorAlert = document.getElementById("error");
                                    errorAlert.style.display = "none";
                                    document.body.style.transition = "background-color 0.5s ease-in-out";
                                    document.body.style.backgroundImage = "radial-gradient(circle, #93F9B9, #1D976C)";
                                    </script>';
                                } else if ($titok === "fekete") {
                                    echo '<script type="text/javascript">
                                    const successAlert = document.getElementById("success");
                                    successAlert.textContent = "Sikeres bejelentkezés!";
                                    successAlert.style.display = "block";
                                    const errorAlert = document.getElementById("error");
                                    errorAlert.style.display = "none";
                                    document.body.style.transition = "background-color 0.5s ease-in-out";
                                    document.body.style.backgroundImage = "radial-gradient(circle, #93F9B9, #1D976C)";
                                    </script>';
                                } else if ($titok === "feher") {
                                    echo '<script type="text/javascript">
                                    const successAlert = document.getElementById("success");
                                    successAlert.textContent = "Sikeres bejelentkezés!";
                                    successAlert.style.display = "block";
                                    const errorAlert = document.getElementById("error");
                                    errorAlert.style.display = "none";
                                    document.body.style.transition = "background-color 0.5s ease-in-out";
                                    document.body.style.backgroundImage = "radial-gradient(circle, #93F9B9, #1D976C)";
                                    </script>';
                                } else {
                                    echo '<script type="text/javascript">
                                    const successAlert = document.getElementById("success");
                                    successAlert.textContent = "Sikeres bejelentkezés!";
                                    successAlert.style.display = "block";
                                    const errorAlert = document.getElementById("error");
                                    errorAlert.style.display = "none";
                                    document.body.style.transition = "background-color 0.5s ease-in-out";
                                    document.body.style.backgroundImage = "radial-gradient(circle, #43C6AC, #191654)";
                                    </script>';
                                }
                            }
                            $conn->close();
                        } else {
                            // Incorrect password
                            echo '<script type="text/javascript">
                            const errorAlert = document.getElementById("error");
                            errorAlert.textContent = "Helytelen jelszó!";
                            errorAlert.style.display = "block";
                            const successAlert = document.getElementById("success");
                            successAlert.style.display = "none";
                            document.body.style.transition = "background-color 0.5s ease-in-out";
                            document.body.style.backgroundImage = "radial-gradient(circle, #c31432, #240b36)";
                            window.setTimeout(function() {
                                location.href = "https://www.police.hu/";
                            }, 3000);
                            </script>';
                        }
                    }
                }
            }
            fclose($file);

            // User not found
            if (!$user_found) {
                echo '<script type="text/javascript">
                const errorAlert = document.getElementById("error");
                errorAlert.textContent = "Helytelen felhasználónév!";
                errorAlert.style.display = "block";
                const successAlert = document.getElementById("success");
                successAlert.style.display = "none";
                document.body.style.transition = "background-color 0.5s ease-in-out";
                document.body.style.backgroundImage = "radial-gradient(circle, #c31432, #240b36)";
                </script>';
            }
        }
        ?>
</body>

</html>