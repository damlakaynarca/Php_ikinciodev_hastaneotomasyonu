<?php  include 'header.php';?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="stil.css">
    <title>Hastane Otomasyon</title>
</head>
<body>

<div class="adsoyad">
       <h4>Sn. <?php   echo $kullanicicek['kullanici_adsoyad'];?></h4>
</div>

<div class="orta_div" id="randevu_div">

<form action="islem.php" method="post">
   <input type="date" name="tarih">

    <select name="sehir" class="hastane">
        <option value="İl Seçin">İl Seçin</option>
        <option value="Adana">Adana</option>
        <option value="Adıyaman">Adıyaman</option>
        <option value="Afyonkarahisar">Afyonkarahisar</option>
        <option value="Ağrı">Ağrı</option>
        <option value="Amasya">Amasya</option>
        <option value="Ankara">Ankara</option>
        <option value="Antalya">Antalya</option>
        <option value="Artvin">Artvin</option>
        <option value="Aydın">Aydın</option>
        <option value="Balıkesir">Balıkesir</option>
        <option value="Bilecik">Bilecik</option>
        <option value="Bingöl">Bingöl</option>
        <option value="Bitlis">Bitlis</option>
        <option value="Bolu">Bolu</option>
        <option value="Burdur">Burdur</option>
        <option value="Bursa">Bursa</option>
        <option value="Çanakkale">Çanakkale</option>
        <option value="Çankırı">Çankırı</option>
        <option value="Çorum">Çorum</option>
        <option value="Denizli">Denizli</option>
        <option value="Diyarbakır">Diyarbakır</option>
        <option value="Edirne">Edirne</option>
        <option value="Elazığ">Elazığ</option>
        <option value="Erzincan">Erzincan</option>
        <option value="Erzurum">Erzurum</option>
        <option value="Eskişehir">Eskişehir</option>
        <option value="Gaziantep">Gaziantep</option>
        <option value="Giresun">Giresun</option>
        <option value="Gümüşhane">Gümüşhane</option>
        <option value="Hakkâri">Hakkâri</option>
        <option value="Hatay">Hatay</option>
        <option value="Isparta">Isparta</option>
        <option value="Mersin">Mersin</option>
        <option value="İstanbul">İstanbul</option>
        <option value="İzmir">İzmir</option>
        <option value="Kars">Kars</option>
        <option value="Kastamonu">Kastamonu</option>
        <option value="Kayseri">Kayseri</option>
        <option value="Kırklareli">Kırklareli</option>
        <option value="Kırşehir">Kırşehir</option>
        <option value="Kocaeli">Kocaeli</option>
        <option value="Konya">Konya</option>
        <option value="Kütahya">Kütahya</option>
        <option value="Malatya">Malatya</option>
        <option value="Manisa">Manisa</option>
        <option value="Kahramanmaraş">Kahramanmaraş</option>
        <option value="Mardin">Mardin</option>
        <option value="Muğla">Muğla</option>
        <option value="Muş">Muş</option>
        <option value="Nevşehir">Nevşehir</option>
        <option value="Niğde">Niğde</option>
        <option value="Ordu">Ordu</option>
        <option value="Rize">Rize</option>
        <option value="Sakarya">Sakarya</option>
        <option value="Samsun">Samsun</option>
        <option value="Siirt">Siirt</option>
        <option value="Sinop">Sinop</option>
        <option value="Sivas">Sivas</option>
        <option value="Tekirdağ">Tekirdağ</option>
        <option value="Tokat">Tokat</option>
        <option value="Trabzon">Trabzon</option>
        <option value="Tunceli">Tunceli</option>
        <option value="Şanlıurfa">Şanlıurfa</option>
        <option value="Uşak">Uşak</option>
        <option value="Van">Van</option>
        <option value="Yozgat">Yozgat</option>
        <option value="Zonguldak">Zonguldak</option>
        <option value="Aksaray">Aksaray</option>
        <option value="Bayburt">Bayburt</option>
        <option value="Karaman">Karaman</option>
        <option value="Kırıkkale">Kırıkkale</option>
        <option value="Batman">Batman</option>
        <option value="Şırnak">Şırnak</option>
        <option value="Bartın">Bartın</option>
        <option value="Ardahan">Ardahan</option>
        <option value="Iğdır">Iğdır</option>
        <option value="Yalova">Yalova</option>
        <option value="Karabük">Karabük</option>
        <option value="Kilis">Kilis</option>
        <option value="Osmaniye">Osmaniye</option>
        <option value="Düzce">Düzce</option>
    </select>
    <select name="hastane" class="hastane">
        <option value="hastane">Hastane Seçin</option>
        <option value="Acıbadem Hastanesi">Acıbadem Hastenesi</option>
        <option value="Malatya Eğitim Ve Araştırma Hastanesi">Malatya Eğitim Ve Araştırma Hastanesi</option>
        <option value="Mavi Nokta Hastanesi">Mavi Nokta Hastanesi</option>
        <option value="Hayat Hastanesi">Hayat Hastanesi</option>
        <option value="Gözde Akademi Hastanesi">Gözde Akademi Hastanesi</option>
        <option value="Medical Park Hastanesi">Medical Park Hastanesi</option>
        <option value="Park Hospital Hastanesi">Park Hospital Hastanesi</option>
        <option value="Hasan Çalık Devlet Hastanesi">Hasan Çalık Devlet Hastanesi</option>
        <option value="Battalgazi Devlet Hastanesi">Battalgazi Devlet Hastanesi</option>
        <option value="Sevgi Hastanesi">Sevgi Hastanesi</option>
        <option value="Müjde Hastanesi">Müjde Hastanesi</option>
        <option value="Divan Hastanesi">Divan Hastanesi</option>



    
        
    </select>
    <select name="klinik" class="klinik">
        <option value="klinik">Klinik Seçin</option>
        <option value="Dahiliye">Dahiliye</option>
        <option value="Göz Hastalıkları">Göz Hastalıkları</option>
        <option value="Kulak Burun Boğaz">Kulak Burun Boğaz</option>
        <option value="Ortopedi">Ortopedi</option>
        <option value="Cildiye">Cildiye</option>
        <option value="Kardiyoloji">Kardiyoloji</option>
        <option value="Nöroloji">Nöroloji</option>
        <option value="Beyin ve Sinir Cerrahisi Poliklinikliği">Beyin ve Sinir Cerrahisi Poliklinikliği</option>
        <option value="Genel Cerrahi Poliklinikliği">Genel Cerrahi Poliklinikliği</option>
        <option value="Çocuk Sağlığı ve Hastalıkları  Poliklinikliği">Çocuk Sağlığı ve Hastalıkları Poliklinikliği</option>
        <option value="Genel Cerrahi Poliklinikliği">Genel Cerrahi Poliklinikliği</option>
        <option value="Enfeksiyon Hastalıkları Poliklinikliği">Enfeksiyon Hastalıkları Poliklinikliği</option>
        <option value="Fizik Tedavi ve Rehabilitasyon Poliklinikliği">Fizik Tedavi ve Rehabilitasyon Poliklinikliği</option>

    </select>

    <select name="doktor" class="doktor">
        <option value="doktor">Doktor Seçin</option>
        <option value="Prof.Dr.Şengül Kaynarca"> Prof.Dr.Şengül Kaynarca</option>
        <option value=" Op.Dr.Uras Cömert">Op.Dr.Uras Cömert</option>
        <option value="Uzm.Dr.Hicran Kanat">Uzm.Dr.Hicran Kanat</option>
        <option value="Uzm.Dr.Seyfullah Doğan">Uzm.Dr.Seyfullah Doğan</option>
        <option value=" Prof.Dr.Ali İhsan Bebek">Prof.Dr.Ali İhsan Bebek</option>
        <option value="Op.Dr.Çağla Şeker">Op.Dr.Çağla Şeker</option>
        <option value="Op.Dr.Ceyhun Karasolak">Op.Dr.Ceyhun Karasolak</option>
        <option value="Prof.Dr.Ayşe Kafkaslı">Prof.Dr.Ayşe Kafkaslı</option>
        <option value="Prof.Dr.Ulaş Utku Şekerci">Prof.Dr.Ulaş Utku Şekerci</option>
        <option value="Prof.Dr.Hasan Turay">Prof.Dr.Hasan Turay</option>


        
    </select>
    <input type="hidden" name="kullanici_id" value="<?php  echo $kullanicicek['kullanici_id']; ?>">
    <button name="randevu_kaydet">Randevu Kaydet</button>
    </form>
</div>

<div class="orta_div"  id="ailehekimi_div">
    <h3>Aile Hekimi</h3>
    <p>
       Aile hekiminize ait bir çalışma saati bulunmamıştır.

    </p>

</div>
</body>
</html>