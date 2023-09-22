        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form Data Diri</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <?php
        error_reporting(0);
            $nama = $_POST['nama'];
            $pekerjaan = $_POST['pekerjaan'];
            $hobby = $_POST['hobby'];
            $cetak = $_POST['cetak'];
        ?>
        <body>
        <h1>Form Data Pribadi</h1><br><br>
            <form action="" method="POST">
                <label for="">Nama</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Anda">
                <label for="">Pekerjaan</label>
                <select name="pekerjaan">
                    <option value="">---Pilih Pekerjaan---</option>
                    <option value="Pengusaha">Pengusaha</option>
                    <option value="Manajer">Manajer</option>
                    <option value="Sekertaris">Sekertaris</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Programmer">Programmer</option>
                    <option value="Desainer">Desainer</option>
                    <option value="Aktris">Aktris</option>
                    <option value="Dokter">Dokter</option>
                    <option value="Bidan">Bidan</option>
                    <option value="Cheff">Cheff</option>
                </select><br>
                <label for="">Hobby</label><br>
                <input type="radio" name="hobby" id="hobby1" value="Bermain Basket">Bermain Basket
                <input type="radio" name="hobby" id="hobby2" value="Jogging">Jogging
                <input type="radio" name="hobby" id="hobby3" value="Membaca">Membaca
                <input type="radio" name="hobby" id="hobby4" value="Mendengarkan Music">Mendengarkan Music
                <input type="radio" name="hobby" id="hobby5" value="Berenang">Berenang
                <input type="radio" name="hobby" id="hobby6" value="Badminton">Badminton
                <input type="radio" name="hobby" id="hobby7" value="Menulis">Menulis
                <input type="radio" name="hobby" id="hobby8" value="Bernyanyi">Bernyanyi
                <input type="radio" name="hobby" id="hobby9" value="Belajar">Belajar
                <input type="radio" name="hobby" id="hobby10" value="Ballet">Ballet
                <br><br>
                <input type="submit" name="cetak" value="Simpan">
            </form>
            <?php
           
             if(isset($cetak)){
                echo "<table border='1'>";
                echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
                echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
                echo "</table>";
            }
             ?>
        </body>
        </html>