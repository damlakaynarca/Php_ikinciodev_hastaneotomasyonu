<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Otomasyonu</title>
</head>
<body>
     <header>
        <h2>Hastane Otomasyonu</h2>
     </header>


     <div class="tableOuter">
        <h1>Giriş Yap</h1>
        <form action="islem.php" method ="post">
        
            <div class="user">
                <input type="text" name="kullanici_tc" placeholder="Tc Kimlik No">
            </div> 
            <div class="pass">   
                <input type="password" name="kullanici_password" placeholder="Şifre"> 
            </div> 
            <button type="submit" class="sub" id ="giris" name="giris_yap">Giriş Yap</button>
            <br>
        </form>
        <a href="uye.php"><button type="submit" class="sub" id="uye">Üye Ol</button></a>
    </div>
</body>
</html>