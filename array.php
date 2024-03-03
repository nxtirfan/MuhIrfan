<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="assets/js/tailwind.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/img/yuki.png">
    <title>Array</title>
  </head>
  <body class="bg-slate-800">
    
    <!-- Table Section Start -->
    <section class="pt-10">
     <h1 class="mb-5 text-center font-bold text-3xl leading-9 tracking-tight text-white hover:text-teal-400"><a href='arraytxt/fullcode.txt'>Tabel Array</a></h2>
     <div class="flex flex-wrap justify-center">

       <!-- Table Bulan Start  -->
      <div class="p-2">
       <table class="text-white rounded-lg border border-teal-700">
        <tr class="bg-teal-600">
        <th class="border-2 border-teal-700 text-center px-2">No</th>
        <th class="border-2 border-teal-700 text-center px-2">Bulan</th>
        </tr>
        <?php
        $tabelBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        foreach ($tabelBulan as $angka => $nama) {
          echo "<tr>";
          echo '<td class="border-2 border-teal-700 text-center px-2">'.($angka + 1)."</td>";
          echo '<td class="border-2 border-teal-700 text-center px-2">'.$nama."</td>";
          echo "</tr>";
        }
        ?>
        </table>
      </div>
      <!-- Table Bulan End  -->
      
      <!-- Table Hari Start  -->
      <div class="p-2">
       <table class="text-white rounded-lg border border-teal-700">
        <tr class="bg-teal-600">
        <th class="border-2 border-teal-700 text-center px-2">No</th>
        <th class="border-2 border-teal-700 text-center px-2">Hari</th>
        </tr>
        <?php
        $tabelHari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
        foreach ($tabelHari as $angka => $nama) {
          echo "<tr>";
          echo '<td class="border-2 border-teal-700 text-center px-2">'.($angka + 1)."</td>";
          echo '<td class="border-2 border-teal-700 text-center px-2">'.$nama."</td>";
          echo "</tr>";
        }
        ?>
        </table>
      </div>
      <!-- Table Hari End  -->

              <!-- Table Anggota Kelas Start -->
              <div class="p-2">
            <table class="border-2 text-white">
                <tr class="bg-teal-600">
                    <th class="border-2 border-teal-700 px-2">Nama</th>
                    <th class="border-2 border-teal-700 px-2">Absen</th>
                    <th class="border-2 border-teal-700 px-2">Umur</th>
                </tr>
                <?php
                $anggotakelas = array(
                    array('Nama' => 'Irfan', 'Absen' => '20', 'Umur' => '17', ),
                    array('Nama' => 'Nuel', 'Absen' => '10', 'Umur' => '18', ),
                    array('Nama' => 'Varrel', 'Absen' => '36', 'Umur' => '19', ),
                    array('Nama' => 'Jonathan', 'Absen' => '15', 'Umur' => '22', ),
                    array('Nama' => 'Hanif', 'Absen' => '22', 'Umur' => '69', ),
                );

                foreach ($anggotakelas as $anggota) {
                    echo "<tr class='border-2 border-teal-700 text-center px-2'>";
                    echo "<td class='border-2 border-teal-700 px-2'>" . $anggota['Nama'] . "</td>";
                    echo "<td class='border-2 border-teal-700 px-2'>" . $anggota['Absen'] . "</td>";
                    echo "<td class='border-2 border-teal-700 px-2'>" . $anggota['Umur'] . "</td>";
                    echo "</tr>";
                }
                ;
                ?>
            </table>
        </div>
        <!-- Table Anggota Kelas End -->

        <!-- Table Murid Kelas Start -->
        <div class="p-2">
            <table class="border-2 border-teal-700 text-white">
                <tr class="bg-teal-600">
                    <th class="border-2 border-teal-700 px-2">No</th>
                    <th class="border-2 border-teal-700 px-2">Nama</th>
                    <th class="border-2 border-teal-700 px-2">Hobi</th>
                    <th class="border-2 border-teal-700 px-2">Kendaraan</th>
                </tr>

                <?php
                $muridkelas = array(
                    array("Nama" => "Irfan", "Hobi" => "Memancing", "Kendaraan" => "BRT", ),
                    array("Nama" => "Nuel", "Hobi" => "Sepak Bola", "Kendaraan" => "Helikopter", ),
                    array("Nama" => "Varrel", "Hobi" => "Main Game", "Kendaraan" => "Jet", ),
                    array("Nama" => "Hanif", "Hobi" => "Volly", "Kendaraan" => "Kapal Pesiar", ),
                );

                foreach ($muridkelas as $no => $murid) {
                    echo "<tr class='border-2 border-teal-700 text-center'>";
                    echo "<td class='border-2 border-teal-700 px-2'>" . ($no + 1) . "</td>";
                    echo "<td class='border-2 border-teal-700 px-2'>" . $murid['Nama'] . "</td>";
                    echo "<td class='border-2 border-teal-700 px-2'>" . $murid['Hobi'] . "</td>";
                    echo "<td class='border-2 border-teal-700 px-2'>" . $murid['Kendaraan'] . "</td>";
                    echo "</tr>";
                };
                ?>
            </table>
        </div>
        <!-- Table Murid Kelas End -->
     </div>


      <!-- Array Multidimensi Start-->
      <div class='flex flex-wrap justify-center mt-8'>
         <?php
        $menu_makanan = array(
          array("Nama" => "Nasi Goreng", "Harga" => 25000, "Deskripsi" => "Nasi goreng dengan campuran sayuran dan telur."),
          array("Nama" => "Ayam Bakar", "Harga" => 35000, "Deskripsi" => "Ayam bakar dengan bumbu rempah yang lezat."),
          array("Nama" => "Sop Buntut", "Harga" => 40000, "Deskripsi" => "Sop buntut dengan kuah kental dan daging yang lembut."),
          array("Nama" => "Pisang Goreng", "Harga" => 5000, "Deskripsi" => "Pisang yang digoreng garing di luar dan lembut di dalam.")
        );

        // Menampilkan menu makanan
        echo "<div><h2 class='text-center font-bold text-3xl text-white mb-5'>Menu Makanan</h2>";
        echo "<table class='border-2 border-teal-700 text-center text-white px-2'>";
        echo "<tr class='bg-teal-600'><th class='border-2 border-teal-700 text-center px-2'>Nama</th><th class='border-2 border-teal-700 text-center px-2'>Harga</th><th class='border-2 border-teal-700 text-center px-2'>Deskripsi</th></tr>";
        foreach ($menu_makanan as $makanan) {
          echo "<tr >";
          echo "<td class='border-2 border-teal-700 text-center px-2'>" . $makanan['Nama'] . "</td>";
          echo "<td class='border-2 border-teal-700 text-center px-2'>Rp " . number_format($makanan['Harga'], 0, ',', '.') . "</td>";
          echo "<td class='border-2 border-teal-700 text-center px-2'>" . $makanan['Deskripsi'] . "</td>";
          echo "</tr>";
        }
        echo "</table>";
        ?>
      </div>
      <!-- Array Multidimensi End -->

    </section>  
    <!-- Table Section End -->

    
    <!-- Array Tutorial Section -->
    <section class="pt-10 text-white">
      <h1 class="mb-5 text-center font-bold text-3xl text-white">Menampilkan Isi Array</h1>
        <?php  
         echo "<div class='flex flex-wrap justify-center'>";

            // menampilkan isi array dengan perulangan for
          echo "<div class='p-2'>";
           echo "<div class='px-2 py-2 border-2 rounded-md'>";
            echo "<h1 class='text-xl font-semibold mb-3 bg-slate-700 p-2 rounded-md hover:bg-slate-600'><a href='arraytxt/for.txt'>Perulangan For:</a></h1>";
            $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            for ($i = 0; $i < count($bulan); $i++) {
                echo $bulan[$i]."<br>";
            }
           echo "</div>";
          echo "</div>";    
        
            // menampilkan isi array dengan perulangan foreach
          echo "<div class='p-2'>";
           echo "<div class='px-2 py-2 border-2 rounded-md'>";
            echo "<h1 class='text-xl font-semibold mb-3 bg-slate-700 p-2 rounded-md hover:bg-slate-600'><a href='arraytxt/foreach.txt'>Perulangan Foreach:</a></h1>";
            $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
            foreach ($hari as $hariku) {
                echo $hariku."<br>";
            }
           echo "</div>";
          echo "</div>";  
            
            // menampilkan isi array dengan perulangan while
          echo "<div class='p-2'>";
           echo "<div class='px-2 py-2 border-2 rounded-md'>";
            echo "<h1 class='text-xl font-semibold mb-3 bg-slate-700 p-2 rounded-md hover:bg-slate-600'><a href='arraytxt/while.txt'>Perulangan While:</a></h1>";
            $kondisi = ["Pagi", "Siang", "Sore", "Malam"];
            $i = 0;
            while($i < count($kondisi)){
                echo $kondisi[$i]."<br>";
                $i++;
            }
           echo "</div>";
          echo "</div>"; 
         echo "</div>";

        // --------------------------------------------------------------------------------------
        echo" <h1 class='my-5 text-center font-bold text-3xl text-white'>Mengedit Array</h1>"; 
         // menampilkan isi array kemudian menghapus isinya
         echo "<div class='flex flex-wrap justify-center'>";
          echo "<div class='p-2'>";
           echo "<div class='px-2 py-2 border-2 rounded-md'>";
            echo "<h1 class='text-xl font-semibold mb-3 bg-slate-700 p-2 rounded-md hover:bg-slate-600'><a href='arraytxt/menghapus.txt'>Menghapus Array</a></h1>";
            $cuaca = [
                "Cerah",
                "Terik",
                "Berawan",
                "Mendung",
                "Badai",
            ];
            echo $cuaca[0]."<br>";
            echo $cuaca[1]."<br>";
            echo $cuaca[2]."<br>";
            echo $cuaca[3]."<br>";
            echo $cuaca[4]."<br>";

            // menghapus mendung
            unset($cuaca[3]);
            
            echo "<div class='my-2'><hr></div>";
            
            echo "<pre>";
            print_r($cuaca);
            echo "</pre>";
           echo "</div>"; 
          echo "</div>";
            
          //menampilkan isi array kemudian menambahkan isinya
          echo "<div class='p-2'>";
           echo "<div class='px-2 py-2 border-2 rounded-md'>";
            echo "<h1 class='text-xl font-semibold mb-3 bg-slate-700 p-2 rounded-md hover:bg-slate-600'><a href='arraytxt/menambah.txt'>Menambah Array</a></h1>";
            $ikan = ["Ikan Teri", "Ikan Paus","Ikan Tongkol"];
            
            foreach ($ikan as $ikanku) {
                echo $ikanku. "<br>";
            }
        
            // menambahkan ikan lele dan ikan tuna
            $ikan[1] = "Ikan Lele";
            $ikan[] = "Ikan Tuna";

            echo "<div class='my-2'><hr></div>";

            echo "<pre>";
            print_r($ikan);
            echo "</pre>";
           echo "</div>";
          echo "</div>";
            
            
          echo "<div class='p-2'>";
           echo "<div class='px-2 py-2 border-2 rounded-md'>";
            echo "<h1 class='text-xl font-semibold mb-3 bg-slate-700 p-2 rounded-md hover:bg-slate-600'><a href='arraytxt/menimpa.txt'>Menimpa Array</a></h1>";
            // menampilkan isi array kemudian menimpa isinya
            $user = [
                "muhammad",
                "irfan",
                "alhakim",
            ];

            foreach ($user as $myuser) {
                echo $myuser. "<br>";
            }
            
            // menimpa isi array pada indeks ke-1 ("irfan")
            $user[1] = "nxtirfan";
            
            echo "<div class='my-2'><hr></div>";

            echo "<pre>";
            print_r($user);
            echo "</pre>";
           echo "</div>";
          echo "</div>";
         echo "</div>";
        ?>    
    </section>
    <!-- Array Tutorial End -->

  </body>
</html>
