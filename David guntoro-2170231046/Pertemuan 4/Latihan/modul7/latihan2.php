<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>
        <?php
        $nama[] = "David";
        $nama[] = "Guntoro";
        echo $nama[0] . $nama[1] ;
        echo "<br>";
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>