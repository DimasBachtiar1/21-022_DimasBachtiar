<h1> Output pertemuan ke-2</h1>
<h3>Buat file PHP yang berisi materi pertemuan hari ini!</h3>
<?php
    $x = "Dimas Bachtiar";
    $y = 210411100022;
    $z = 172.5;
    $q = 62.5;

    echo "<br>Halo Saya akan memperkenalkan diri saya";
    echo "<br>Nama saya ".$x;
    echo "<br> NIM saya ".$y;
    echo "<br> Tinggi saya ".$z."cm";
    echo "<br> Berat badan saya ".$q."kg";

    echo "<br><br> Dibawah ini untuk mengetahui tipe datanya ";

    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";
    var_dump($z);
    echo "<br>";
    var_dump($q);

?>
<style>
    body{
        background-color: #99ccff;
        color: #000033;
        font-family: Century ;
    }
    h1,h3{
        text-align: center;
        color: #e60000;
        font-family: Century Gothic;
    }
</style>

<script>
     window.alert('Selamat datang di Web sederhana untuk menampilkan output Pertemuan ke-2 PAW')
</script>