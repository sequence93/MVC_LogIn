<form action="LoginController.php" method="POST" enctype="multipart/form-data">
    <h3>Ime</h3>
        <input type="text" name="ime" id="input" placeholder="Ime" required/>
    <h3>Prezime</h3>
        <input type="text" name="prezime" id="input" placeholder="Prezime" required />
    <h3>Korisnicko ime</h3>
        <input type="text" name="korisnicko" id="input"  placeholder="Korisnicko" required/>
    <h3>Email adresa</h3>
        <input type="email" name="email" id="input"  placeholder="example@email.com" required/>
    <h3>Sifra</h3>
        <input type="password" name="sifra" id="input"  placeholder="**********" required /></br>
    <h3>Drzava</h3>
        <select style="margin-bottom: 10px;" name="drzava" >
            <option>Izaberi drzavu</option>
            <option>Bosna</option>
            <option>Srbija</option>
            <option>Hrvatska</option>
            <option>Makedonija</option>
            <option>Slovenija</option>
            <option>Crna Gora</option>
        </select>
    <h3>Grad</h3>
        <input type="text" name="grad" id="input"  placeholder="Grad" required />
    <h3>Adresa</h3>
        <input type="text" name="adresa" id="input" placeholder="Adresa" required />
    </br>            
        <button type="submit" name="submit" value="Registruj" class="btn">Registruj se</button> </br></br>
        <a href="?log=log">< Nazad</a>
</form>