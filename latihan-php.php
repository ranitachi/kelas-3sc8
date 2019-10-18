<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contoh PHP</h1>
    <?php
      print("Selamat Belajar PHP<br>");  
      print("<h1 style='font-size:15px;'>Hello World</h1>");
      //Komen
      /*
        Komentar
      */
    ?>
    <h1 style='font-size:15px;'>Hello World</h1>
    <?php
        $kota=array("Medan","Jakarta","Bandung","Denpasar","Sumbawa");
        // $kota[]="Medan";
        // $kota[]="Jakarta";
        // $kota[]="Bandung";
        // $kota[]="Denpasar";
        // $kota[]="Makasar";
        $jumlah = count($kota);
        for($i=0;$i<$jumlah;$i++)
        {
            if($i==10)
                break;

            print("\$kota[$i] : $kota[$i] <br>");
        }
        print("<br>");
        foreach($kota as $i=>$v)
        {
            print("\$kota[$i] : $v<BR>");
        }

        $object=array(
                'nama' => 'Kotaro Minami',
                'asal' => 'Ocean Blue',
                'usia' => 34
            );
        print("<br>");
        print($object['asal']);
        print("<br>");
        foreach($object as $index => $value)
        {
            print("Index : $index ==> $value<br>");
        }
    ?>
</body>
</html>