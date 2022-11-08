<?php
        $programmer_php = array ("Andi", "Budi", "Wati" , "Gunawan" , "Baco" , "Becce" , "Fatma");
        $programmer_python = array ("Andi" , "Fatma" , "Fadli" , "Haris" , "Baco");
        
        echo "Daftar mahasiswa yang masuk kelompok Programmer PHP dengan nama diurutkan secara Ascending : ";
        echo "<ul>";
        sort($programmer_php);
        foreach ($programmer_php as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        echo "Daftar mahasiswa yang masuk kelompok Programmer Python dengan nama diurutkan secara Descending :";
        echo "<ul>";
        rsort($programmer_python);
        foreach ($programmer_python as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        echo "Daftar mahasiswa yang masuk kelompok Programmer PHP tapi tidak termasuk kelompok Programmer Python : ";
        $bukan_python = array_diff ($programmer_php, $programmer_python);
        echo "<ul>";
        foreach ($bukan_python as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";


        echo "Daftar mahasiswa yang masuk kelompok Programmer Python tapi tidak termasuk kelompok Programmer PHP : ";
        $bukan_php = array_diff ($programmer_python, $programmer_php);
        echo "<ul>";
        foreach ($bukan_php as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        echo "Daftar mahasiswa yang masuk kelompok Programmer PHP dan Programmer Python sekaligus : ";
        $php_dan_python = array_intersect ($programmer_python, $programmer_php);
        echo "<ul>";
        foreach ($php_dan_python as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";


        echo "Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP atau Programmer Python.Satukan terlebih dahulu data dari kedua variabel array dengan teknik merge : ";
        $semua = array_merge ($programmer_php, $programmer_python);
        echo "<ul>";
        sort($semua);
        foreach ($semua as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        //Bagian 2
        echo "Lengkapi file array_2 php dengan perintah untuk menambahkan nama Anda ke dalam variabe programmer_php dengan menggunakan perintah array push().";
        array_push($programmer_php, "Muhammad syawal");
        echo "<br>Bagian 2 : <br>";
        echo "<ul>";
        $countProgrammerPhp = count($programmer_php);
        for($i=0; $i < $countProgrammerPhp; $i++)
        {
            echo "<li>".$programmer_php[$i] . "<br>";
        }
        echo "</ul>";

?>