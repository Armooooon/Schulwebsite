
<?php 
//Islam Praktikant
Layout::Header("Admin Panel");
Require_once("CLASS/class.php");
Require_once("VIEW/adminpanel.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
<style>
    /* CSS für das Admin-Panel */
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        margin-top: 5px;
    }

    button {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>

        <h2>Adresse</h2>
        <form>
            <div class="form-group">
                <label for="address">Adresse:</label>
                <input type="text" id="address" name="address">
            </div>
            <button type="submit">Speichern</button>
        </form>

        <h2>Personfunktion</h2>
        <form>
            <div class="form-group">
                <label for="function">Funktion:</label>
                <input type="text" id="function" name="function">
            </div>
            <button type="submit">Speichern</button>
        </form>

        <h2>Person</h2>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="address">Adresse:</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="function">Funktion:</label>
                <input type="text" id="function" name="function">
            </div>
            <button type="submit">Speichern</button>
        </form>

        <h2>Benutzer</h2>
        <form>
            <div class="form-group">
                <label for="username">Benutzername:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Passwort:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="person">Person:</label>
                <input type="text" id="person" name="person">
            </div>
            <button type="submit">Speichern</button>
        </form>

        
    </div>
</body>
</html>

<?php Layout::Footer(); ?>