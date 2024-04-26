<?php Layout::Header("Admin Panel"); ?>
<!-- Islam Praktikant -->

<div style="padding-top:120px" class="containerap">

<h1 class="h1ap">Admin Panel</h1>

        <h2>E-Mail Adresse</h2>
        <form>
            <div class="form-groupap">
                <label class="labelap" for="address">Adresse:</label>
                <input class="inputap" type="text" id="address" name="address">
            </div>
            <button class="buttonap" type="submit">Speichern</button>
        </form>

        <h2>Ihre Funktion</h2>
        <form>
            <div class="form-groupap">
                <label class="labelap"for="function">Funktion:</label>
                <input class="inputap" type="text" id="function" name="function">
            </div>
            <button class="buttonap" type="submit">Speichern</button>
        </form>

        <h2>Person</h2>
        <form>
            <div class="form-groupap">
                <label class="labelap" for="name">Name:</label>
                <input class="inputap" type="text" id="name" name="name">
            </div>
            <div class="form-groupap">
                <label class="labelap" for="address">E-Mail Adresse:</label>
                <input class="inputap" type="text" id="address" name="address">
            </div>
            <div class="form-groupap">
                <label class="labelap" for="function">Funktion:</label>
                <input class="inputap" type="text" id="function" name="function">
            </div>
            <button class="buttonap" type="submit">Speichern</button>
        </form>

        <h2>Benutzer</h2>
        <form>
            <div class="form-groupap">
                <label class="labelap" for="username">Benutzername:</label>
                <input class="inputap" type="text" id="username" name="username">
            </div>
            <div class="form-groupap">
                <label class="labelap" for="password">Passwort:</label>
                <input class="inputap" type="password" id="password" name="password">
            </div>
            <div class="form-groupap">
                <label class="labelap" for="person">Person:</label>
                <input class="inputap" type="text" id="person" name="person">
            </div>
            <button class="buttonap" type="submit">Speichern</button>
        </form>



</div>

<style>
    
    .h1ap {
        text-align: center;
    }

    .containerap {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .form-groupap {
        margin-bottom: 10px;
    }

    .labelap {
        display: block;
        font-weight: bold;
    }

    .inputap[type="text"] {
        width: 100%;
        padding: 5px;
        margin-top: 5px;
    }

    .buttonap {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

</style>
<?php Layout::Footer();