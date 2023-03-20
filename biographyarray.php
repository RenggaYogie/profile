<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIOGRAPHY</title>
    <link href="Logo UPN.png">
    <link rel="stylesheet" href="biographyarray.css">
</head>
<body>
    <?php
    $logo = array("ranggauka34@gmail.com", "renggayogie", "+62 813 - 9843 - 0707", "Perum UKA Gg.20 No.31, Surabaya");
    $pendidikan = array("SDN Sememi 1 Surabaya", "SMPN 14 Surabaya", "SMAN 1 Menganti");
    $organisasi = array("Anggota Bidang Advokesma BEM Fasilkom 2022 - 2023", "Anggota Perkap & Konsum FKBM-IK 2022",
    "Anggota Perlengkapan Pengabdi Desa 2022","Kadiv Acara Kajian Bareng Fasilkom 2022",
    "Kadiv Perlengkapan & Konsumsi Open Talk 2022", "Wakil Ketua Loka Karya 2022");
    $hobby = array("Hiking", "Travelling", "Study", "Sleeping", "Eat", "Take A Bath", "Repeat");
    $softskill = array("Kerja Tim :  * * * * * * * * *", "Kreativitas :  * * * * * * * *", "Public Speaking :  * * * * * * *", "Kepemimpinan    :  * * * * * * *");
    ?>

    <div class="container">
        <div class="box left">
            <h1>BIODATA</h1>
            <img class="img" border="2" src="gambar/DSC_2750.JPG">
            <p>Rengga Yogie Febrianto</p>
            <p><?php echo "Surabaya, " . $tanggal_lahir = "2003-02-18"; ?></p>
            <?php $umur = date_diff(date_create($tanggal_lahir), date_create('today'))->y; ?>
            <p><?php echo "Saya Berumur " . $umur . " tahun."; ?></p>
            
            <h2>My Contact :)</h2>
            <div class="logo logokiri">
                <h4><img border="4" src="gambar/email.png"><?php echo $logo[0]?></h4>
                <h4><img border="4" src="gambar/ig.png"><?php echo $logo[1]?></h4>
                <h4><img border="4" src="gambar/hp.png"><?php echo $logo[2]?></h4>
                <h4><img border="4" src="gambar/lokasi.png"><?php echo $logo[3]?></h4>
            </div>
            <div class="aboutme">
                <br><h2>About Me</h2>
                <h5>Saya Merupakan seseorang yang sangat tertarik dunia IT & Bisnis, tujuan saya ingin membanggakan kedua orang tua dan bermanfaat bagi seluruh masyarakat Indonesia. Oleh karena itu saya sekarang menempuh pendidikan kuliah di jurusan Informatika Universitas Pembangunan "Veteran" Jawa Timur dan sekarang saya sudah memasuki semester 4</h5>
                <h5>Sekian dan Terima Kasih</h5>
            </div>
        </div>

        <div class="box right logokanan"><br><br>
            <h3><img src="gambar/akatsuki.png"> Riwayat Pendidikan</h3>
            <div class="tekskanan">
                <li><?php echo $pendidikan[0]?></li>
                <li><?php echo $pendidikan[1]?></li>
                <li><?php echo $pendidikan[2]?></li>
            </div><br>

            <h3><img src="gambar/akatsuki.png">Riwayat Organisasi & Kepanitiaan</h3>
            <div class="tekskanan">
                <li><?php echo $organisasi[0]?></li>
                <li><?php echo $organisasi[1]?></li>
                <li><?php echo $organisasi[2]?></li>
                <li><?php echo $organisasi[3]?></li>
                <li><?php echo $organisasi[4]?></li>
                <li><?php echo $organisasi[5]?></li>
            </div><br>

            <h3><img src="gambar/akatsuki.png">Hobby & Activities</h3>
            <div class="tekskanan">
                <li><?php echo $hobby[0]?></li>
                <li><?php echo $hobby[1]?></li>
                <li><?php echo $hobby[2]?></li>
                <li><?php echo $hobby[3]?></li>
                <li><?php echo $hobby[4]?></li>
                <li><?php echo $hobby[5]?></li>
                <li><?php echo $hobby[6]?></li>
            </div>

            <h3><img src="gambar/akatsuki.png">Soft Skill</h3>
            <div class="tekskanan">
                <li><?php echo $softskill[0]?></li>
                <li><?php echo $softskill[1]?></li>
                <li><?php echo $softskill[2]?></li>
                <li><?php echo $softskill[3]?></li>
            </div>
        </div>
      </div>
</body>
</html>