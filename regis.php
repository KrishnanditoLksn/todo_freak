<!DOCTYPE html>
<html lang="en">
<style>
    body {
        background: url("intellij-2023.2-1920x1080.png");
    }

    label,
    h1 {
        font-family: "Rubik", sans-serif;
        color: green;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        padding: 50px;
        background-color: aliceblue;
        border-radius: 10px;
        margin-top: 130px;
    }

    .regis_forms {
        padding: 20px;
        margin: 20px;
    }

    .regis_input {
        margin-left: 40px;
        padding-top: 35px;
        margin-right: 45px;
    }

    input[type="text"],
    input[type="password"] {
        width: 120%;
        padding: 10px 15px;
        margin: 10px 0;
        box-sizing: border-box;
    }

    .submit-regis {
        margin-top: 40px;
        margin-left: 62px;
        box-shadow: 0 4px #c1a23c;
        color: #5e4800;
        background-color: white;
        text-transform: uppercase;
        padding: 10px 20px 20px;
        border-radius: 2px;
        margin-bottom: 20px;
        transition: all .2s ease;
        font-weight: 900;
        cursor: pointer;
        letter-spacing: 1px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>Registrasi User Freak</h1>
            <form method="post" class="regis_forms">
                <div class="regis_input">
                    <label for="fname">Nama Lengkap:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password"><br><br>
                </div>
                <input type="submit" class="submit-regis" value="Registrasi">
            </form>
        </div>
    </div>
    </div>
</body>

</html>