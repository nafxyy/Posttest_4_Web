<?php include 'isi.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Membership</title>
    <link rel="stylesheet" href="./dist/css/style.css">
    <script src="js.js"></script>

</head>
<body>
<header1>
        <section class="navigation">
            <div id="container">
                <div id="box-navigation">
                    <div class="box">
                        <h1>NAF STORE</h1>
                    </div>
                    <div id="boxes">
                        <ul>
                            <h1>LIST MEMBER</h1>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
</header1>

<section class ="containermem">
    <div id = "tampilanmem">
        <b>LIST MEMBERSHIP</b>  
        <div id = "tampilantable">
            <table id = "table1" border="2">
                <tr>
                    <td>NO</td>
                    <td>Nama</td>
                    <td>Nomor HP</td>
                    <td>Umur</td>
                    <td>Alamat</td>
                    <td>Jenis Kelamin</td>
                    <td>Jenis Membership</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $umur; ?></td>
                    <td><?php echo $alamat; ?></td>
                    <td><?php echo $jenis_kelamin; ?></td>
                    <td><?php echo $jenis_member; ?></td>
                </tr>
            </table>
        </div>
    </div>
</section>

<section id="hero2">
            <h1>Welcome to Memberships!</h1>
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

