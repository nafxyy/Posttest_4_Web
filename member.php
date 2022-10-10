<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Thrift Memberships</title>
        <link rel="stylesheet" href="./dist/css/style.css"?v=<?php echo time(); ?>">
        <script src="js.js"></script>
        
    </head>

    <body class="member">
    <header1>
        <section class="navigation">
            <div id="container">
                <div id="box-navigation">
                    <div class="box">
                        <h1>NAF STORE</h1>
                    </div>
                    <div id="boxes">
                        <ul>
                            <h1>MEMBERSHIP PROGRAM</h1>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
</header1>

        <b id = "titleform">FORM MEMBERSHIP</b>
        <div class = "containerform">
            <form action = "tampilan.php" method = "POST" name = "form1">
                <table id = "formtable">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type = "text" name = "nama" size = "25"></td>
                    </tr>

                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td><input type = "text" name = "nomor" size = "25"></td>
                    </tr>

                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type = "number" name = "umur" size = "25"></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type = "text" name = "Alamat" size = "25"></td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name = "jenis_kelamin" value = "Laki-Laki" checked = "">Laki-Laki</input>
                            <input type="radio" name = "jenis_kelamin" value = "Perempuan" checked = "">Perempuan</input>
                        </td>
                    </tr>

                    <tr>
                        <td>Jenis Membership</td>
                        <td>:</td>
                        <td>
                            <select name="member">
                                <option value = "Bronze">Bronze</option>
                                <option value = "Silver">Silver</option>
                                <option value = "Gold">Gold</option>
                                <option value = "Platinum">Platinum</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan = 3 class="butonsub"><input type="submit" name="spn" values="simpan" style="height:1cm; width:4cm; margin: 0; background-color:white; padding-left 10px;"></td>
                    </tr>
                </table>
            </form>
        </div>

        <section">
        <h1 id="judulmem">Membership Benefits</h1>
        <div>
            <div class="boxmem">
                <div class="box1">
                    <img src="./logo/logo1.png" alt="">
                    <h1>Extra Discount</h1>
                    <p>Dapatkan Tambahan Diskop Tiap Hari</p>
                </div>

                <div class="box1">
                    <img src="./logo/logo2.png" alt="">
                    <h1>Priority Service</h1>
                    <p>Pelayanan Prioritas Spesial Member</p>
                </div>

                <div class="box1">
                    <img src="./logo/logo3.png" alt="">
                    <h1>Delivery Discount</h1>
                    <p>Tambahan Diskon Pengiriman Khusus Member</p>
                </div>

                <div class="box1">
                    <img src="./logo/logo4.png" alt="">
                    <h1>New Catalog Everyday</h1>
                    <p>Info Terkait Katalog Baru Setiap Harinya</p>
                </div>
            </div>
        </div>
    </section>

        <footer>
            <section class="foot">
                <div id="footer">
                    <p>&copy; Owned by Naf-Store 2022</p>
                </div>
            </section>
        </footer>
    </body>
</html>

