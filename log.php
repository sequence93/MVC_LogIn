<form action="LoginController.php" method="POST" enctype="multipart/form-data">
    <h3>Korisnicko ime</h3>
        <input type="text" name="korisnicko" id="input"  placeholder="Korisnicko" required/>
    <h3>Sifra</h3>
        <input type="password" name="sifra" id="input" placeholder="**********" required />
    </br>
                    
        <button type="submit" name="submit" value="Login" class="btn">Uloguj se</button> </br></br>
        <a href="?log=register">Niste korisnik? Registrujte se</a>
</form>