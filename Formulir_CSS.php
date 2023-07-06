<?php

function hasil(){

$nope= $_POST['nope'];

$namleng= $_POST['namleng'];

$namsek = $_POST['namsek'];

$kelamin = $_POST['jeniskelamin'];

$telahir = $_POST['tempatlahir'];

$talahir = $_POST['tanggallahir'];

$alrum = $_POST['alamatrumah'];

$rt = $_POST['rt'];

$rw = $_POST['rw'];

$kelurahan = $_POST['kelurahan'];

$kecamatan = $_POST['kecamatan'];

$kota = $_POST['kota'];

$provinsi = $_POST['provinsi'];

$notelp = $_POST['notelp'];


error_reporting(0);

//Output program dan Pemanggilan Array

?>

<table border="0" width="500" cellpadding="1" cellspacing="1" >

<tr>
<td><?php echo '&nbsp No Peserta Ujian';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$nope;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Nama Lengkap';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$namleng;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Nama Asal Sekolah';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$namsek;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Jenis Kelamin';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$kelamin;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Tempat Lahir';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$telahir;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Tanggal Lahir';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$talahir;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Alamat Rumah';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$alrum;?></td>
</tr>

<tr>
<td><?php echo '&nbsp RT';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$rt;?></td>
</tr>

<tr>
<td><?php echo '&nbsp RW';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$rw;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Kelurahan';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$kelurahan;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Kecamatan';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$kecamatan;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Kota';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$kota;?></td>
</tr>

<tr>
<td><?php echo '&nbsp Provinsi';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.$provinsi;?></td>
</tr>

<tr>
<td><?php echo '&nbsp No telp / HP  ';?></td>
<td><?php echo '&nbsp : ';?></td>
<td><?php echo '&nbsp'.'+62 ',$notelp;?></td>
</tr>

</td>

</tr>

</table>

<?php

}

?>

<!-- Tampilan Awal Form Pemesanan -->

<html>

<form method="POST" name="frmpost" action="">

<table width="500" border="1" cellpadding="0" cellspacing="0" align="center" class="tabel">

<style>
    .header{
        background-color: yellow;
        color: gray;
    }
    .tabel{
        background-color: orange;
    }
    input{
        border:2px solid red;   
    }
    select{
        border:2px solid red;   
    }
    .gp2{
        background-color: yellow;
        color: blue;
        border: solid gray;
    }
    body{
        background-color: brown;
    }
</style>

<tr class="header">

<th><h2> Form Pendaftaran </h2></th>

</tr>

<tr>

<td>

<table width="500" border="0" cellpadding="6" cellspacing="6" align="center">

<tr height="40">

<td width="200" valign="center">No Peserta Ujian</td>

<td width="10" valign="center"> : </td>

<td><input type="text" name="nope" class="gp1"></td>

</tr>
<tr height="40">

<td width="200" valign="center">Nama Lengkap</td>

<td width="10" valign="center"> : </td>

<td><input type="text" name="namleng" class="gp1"></td>

</tr>

<tr height="30">

<td width="200" valign="center">Nama Asal Sekolah</td>

<td width="10" valign="center"> : </td>

<td><input name="namsek" type="text" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">Jenis Kelamin</td>

<td width="10" valign="center"> : </td>

<td>

<select name="jeniskelamin" class="gp1">

<option name="-" value="-" hidden >-</option>

<option value="Laki-Laki">Laki-Laki</option>

<option value="Perempuan">Perempuan</option>

</select>

</td>

</tr>

<tr height="30">

<td width="200" valign="center">Tempat Lahir</td>

<td width="10" valign="center"> : </td>

<td><input name="tempatlahir" type="text" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">Tanggal Lahir</td>

<td width="10" valign="center"> : </td>

<td><input name="tanggallahir" type="date" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">Alamat Rumah</td>
<td width="10" valign="center"> : </td>
<td><input name="alamatrumah" type="text" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">RT</td>
<td width="10" valign="center"> : </td>
<td><input name="rt" type="text" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">RW</td>
<td width="10" valign="center"> : </td>
<td><input name="rw" type="text" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">Kelurahan</td>
<td width="10" valign="center"> : </td>
<td><input name="kelurahan" type="text" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">Kecamatan</td>
<td width="10" valign="center"> : </td>
<td><input name="kecamatan" type="text" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">Kota</td>
<td width="10" valign="center"> : </td>
<td><input name="kota" type="text" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">Provinsi</td>
<td width="10" valign="center"> : </td>
<td><input name="provinsi" type="text" class="gp1"/></td>

</tr>

<tr height="30">

<td width="200" valign="center">No Telp / HP</td>
<td width="10" valign="center"> : </td>
<td> +62 <input name="notelp" type="text" size="16"class="gp1"/></td>

</tr>

<tr>

<td align="right" colspan="2"><input type="submit" name="btnOk" value="Simpan" class="gp2"/></td>

<td><input type="reset" name="btnCancel" value="Cancel" class="gp2"/></td>

</tr>

</table>

</table>

<br>

<br>

<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">

<tr>

<td>

<?php

//Pemanggilan Function

hasil();

?>

</td>

</tr>

</table>

</form>

</center>

</html>