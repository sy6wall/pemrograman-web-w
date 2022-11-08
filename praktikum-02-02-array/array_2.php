<?php
$programmer_php = array("Andi","Budi","Wati","Gunawan","Baco","Becce","Fatma");
$programmer_python = array("Andi","Fatma","Fadli","Haris","Baco");

//Bagian A
sort($programmer_php);
   $countProgrammerPhp = count($programmer_php);
      echo "Bagian A : <br>";
      echo "<ul>";
         for($i=0; $i < $countProgrammerPhp; $i++)
         {
            echo "<li>". $programmer_php[$i] . "<br>";
         }
      echo "</ul>";
 
//Bagian B
      echo "<br>Bagian B : <br>";
      echo "<ul>";
rsort($programmer_python);
   $countProgrammerPhython = count($programmer_python);

         for($x=0; $x < $countProgrammerPhython; $x++)
         {
            echo "<li>". $programmer_python[$x] . "<br>";
         }
      echo "</ul>";

//Bagian C
      echo "<br>Bagian E dan F: <br>";
      echo "<ul>";
   $mahasiswa = array_diff($programmer_php,$programmer_python);
   $countMahasiswa = count($mahasiswa);

         for($m=0; $m < $countMahasiswa; $m++)
         {
            echo "<li>" . $mahasiswa[$m] . "<br>";
         }
 echo "</ul>";

//Bagian E dan F
      echo "<br>Bagian E dan F: <br>";
      echo "<ul>";
   $mahasiswa = array_merge($programmer_php,$programmer_python);
   $countMahasiswa = count($mahasiswa);

         for($m=0; $m < $countMahasiswa; $m++)
         {
            echo "<li>" . $mahasiswa[$m] . "<br>";
         }
 echo "</ul>";

 //Bagian 2
 array_push($programmer_php, "Jamaluddin T");
 echo "<br>Bagian 2 : <br>";
 echo "<ul>";
 $countProgrammerPhp = count($programmer_php);
 for($i=0; $i < $countProgrammerPhp; $i++)
 {
    echo "<li>".$programmer_php[$i] . "<br>";
 }
 echo "</ul>";
 ?>