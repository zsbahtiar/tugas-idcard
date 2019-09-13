<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration - SMA NEGERI 4 TASIKMALAYA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="col-50 form-registrasi" style="background-color: #FAFAFA;height:300px;border-radius:5px;">
        <div class="fill-id">
            <div id="header col-100">
                <div class="logo col-20" style="float:left;">
                    <img src="logopatas.png" style="width:60%;"alt="">
                </div>
                <div class="kop col-80" style="float:left;">
                    <span class="sekolah">SMA NEGERI 4 Tasikmalaya</span>
                    <span class="alamat">Jl. LetKol RE DJaelani, Cilembang, Kec. Cihideung, Tasikmalaya</span>
                </div>
            </div>
            <div id="data">
                <table>
                    <tr>
                        <td>NIS</td>
                        <td>: <?php echo "$_POST[nis]";?></td>
                        <td rowspan="5"><img src="logopatas.png" style="width:20%;" alt=""></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>: <?php echo "$_POST[nama]";?></td>
                    </tr>
                    <tr>
                        <td>jenis Kelamin</td>
                        <td>: <?php echo "$_POST[kelamin]";?></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>: <?php echo "$_POST[tempat_lahir], $_POST[tanggal_lahir]";?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?php echo "$_POST[alamat_lengkap]";?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: <?php echo "$_POST[agama]";?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>