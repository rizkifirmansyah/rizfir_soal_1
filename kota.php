<?php  
 $sumber = 'https://raw.githubusercontent.com/lutangar/cities.json/master/cities.json';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];
 echo "<h1 align='center'>Jumlah Kota Ada ".count($data)."</h1>";
 echo "<br/>";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Soal pertama</title>
</head>
<body>
 <table border="1">
  <tr>
   <th>No</th>
   <th>Negara</th>
   <th>Nama Kota</th>
   <th>Latitude</th>
   <th>Longitude</th>
  </tr>
  <?php   
   for($a=0; $a < count($sql); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    print "<td>".$a."</td>";
    // menayangkan 
    print "<td>".$data[$a]['country']."</td>";
    print "<td>".$data[$a]['name']."</td>";
    print "<td>".$data[$a]['lat']."</td>";
    print "<td>".$data[$a]['lng']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</body>
</html>