<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "BIOGRAPHY"; ?></title>
    <link href="Logo UPN.png">
    <link rel="stylesheet" href="bitnami.css">
</head>
<body>
    <div class="container">
        <div class="box left">
            <h1>BIODATA</h1>
            <img class="img" border="2" src="DSC_2750.JPG">
            <p><?php echo "Rengga Yogie Febrianto" ?></p>
            <p><?php echo "Surabaya, " . $tanggal_lahir = "2003-02-18"; ?></p>
            <?php $umur = date_diff(date_create($tanggal_lahir), date_create('today'))->y; ?>
            <p><?php echo "Saya Berumur " . $umur . " tahun."; ?></p>
            
            <h2>My Contact :)</h2>
            <div class="logo logokiri">
                <h4><img border="4" src="email.png"><?php echo "renggauka34@gmail.com" ?></h4>
                <h4><img border="4" src="ig.png"><?php echo "renggayogie" ?></h4>
                <h4><img border="4" src="hp.png"><?php echo "+62 813 - 9843 - 0707" ?></h4>
                <h4><img border="4" src="lokasi.png"><?php echo "Perum UKA Gg.20 No.31, Surabaya" ?></h4>
            </div>
            <div class="aboutme">
                <br><h2><?php echo "About Me" ?></h2>
                <h5><?php echo "Saya Merupakan seseorang yang sangat tertarik dunia IT & Bisnis, tujuan saya ingin membanggakan kedua orang tua dan bermanfaat bagi seluruh masyarakat Indonesia. Oleh karena itu saya sekarang menempuh pendidikan kuliah di jurusan Informatika Universitas Pembangunan 'Veteran' Jawa Timur dan sekarang saya sudah memasuki semester 4" ?></h5>
                <h5><?php echo "Sekian dan Terima Kasih" ?></h5>
            </div>
        </div>

        <div class="box right logokanan"><br><br>
            <h3><img src="akatsuki.png"><?php echo " Riwayat Pendidikan" ?></h3>
            <div class="tekskanan">
                <li><?php echo "Sememi 1 Surabaya" ?></li>
                <li><?php echo "SMPN 14 Surabaya" ?></li>
                <li><?php echo "SMAN 1 Menganti" ?></li>
            </div><br>

            <h3><img src="akatsuki.png"><?php echo "Riwayat Organisasi & Kepanitiaan" ?></h3>
            <div class="tekskanan">
                <li><?php echo "Anggota Bidang Advokesma BEM Fasilkom 2022 - 2023" ?></li>
                <li><?php echo "Anggota Perkap & Konsum FKBM-IK 2022" ?></li>
                <li><?php echo "Anggota Perlengkapan Pengabdi Desa 2022" ?></li>
                <li><?php echo "Kadiv Acara Kajian Bareng Fasilkom 2022" ?></li>
                <li><?php echo "Kadiv Perlengkapan & Konsumsi Open Talk 2022" ?></li>
                <li><?php echo "Wakil Ketua Loka Karya 2022" ?></li>
            </div><br>

            <h3><img src="akatsuki.png"><?php echo "Hobby & Activities" ?></h3>
            <div class="tekskanan">
                <li><?php echo "Hiking" ?></li>
                <li><?php echo "Travelling" ?></li>
                <li><?php echo "Study" ?></li>
                <li><?php echo "Sleeping" ?></li>
                <li><?php echo "Eat" ?></li>
                <li><?php echo "Take A Bath" ?></li>
                <li><?php echo "Repeat" ?></li>
            </div>

            <h3><img src="akatsuki.png"><?php echo "Soft Skill" ?></h3>
            <div class="tekskanan">
                <li><?php echo "Kerja Tim :  * * * * * * * * *" ?></li>
                <li><?php echo "Kreativitas :  * * * * * * * *" ?></li>
                <li><?php echo "Public Speaking :  * * * * * * *" ?></li>
                <li><?php echo "Kepemimpinan    :  * * * * * * *" ?></li>
            </div>
        </div>
      </div>
</body>
</html>