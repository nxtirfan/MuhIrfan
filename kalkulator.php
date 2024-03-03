<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/yuki.png">
    <script src="assets/js/tailwind.js"></script>
    <title>Kalkulator</title>
</head>
<body class="bg-slate-800">
    <!-- Kalkulator Start -->
    <section class="pt-36">
     <div class="flex flex-col justify-center px-6 py-12 lg:px-8">
      <!-- <div class="top-10 bg-teal-500 rounded-xl"> -->
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" method="POST">
          <h1 class="text-center font-bold text-3xl text-white">Kalkulator</h1>
          <div>
            <label class="text-sm font-medium leading-6 text-white" for="a">Angka Pertama</label>
            <div class="mt-1">
              <input class="w-full p-2 rounded-md" id="a" type="text" name="a" placeholder="Masukkan angka pertama" required/>
            </div>
          </div>

          <div>
            <label class="text-sm font-medium leading-6 text-white" for="b">Angka Kedua</label>
            <div class="mt-1">
              <input class="w-full p-2 rounded-md" id="b" type="text" name="b" placeholder="Masukkan angka kedua" required/>
            </div>
          </div>

          <div class="flex">
            <select class="font-bold w-full p-2 rounded-md" name="operasi"> 
              <option value="tambah">+</option> 
              <option value="kurang">-</option> 
              <option value="kali">x</option> 
              <option value="bagi">/</option> 
            </select>
          </div>
  
          <div class="flex mt-1">
            <button type="submit" name="submit"
              class="flex w-full justify-center rounded-md bg-teal-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              Hitung
            </button>
          </div>
          <?php 
            if (isset($_POST["submit"])) {
                $a = $_POST['a'];
                $b = $_POST['b'];

                $operasi = $_POST['operasi'];
                switch ($operasi) {
                case 'tambah':
                $hasil = $a+$b;
                break;
                case 'kurang':
                $hasil = $a-$b;
                break;
                case 'kali':
                $hasil = $a*$b;
                break;
                case 'bagi':
                $hasil = $a/$b;
                break; 
                }

                echo "
                <p class='mt-5 text-center font-bold text-sm text-teal-600 leading-6 bg-white px-3 py-1.5 border border-teal-500 rounded-md'>
                Hasilnya adalah $hasil
                </p>";
               }

            //     $hasil = $a + $b;
            //     echo "
            //     <p class='mt-5 text-center font-bold text-sm text-teal-600 leading-6 bg-white px-3 py-1.5 border border-teal-500 rounded-md'>
            //     Hasilnya adalah $hasil
            //     </p>
            //     ";
            // }        
        
          ?>
          </p>                 
        </form>
      </div>
     </div>
    </section>
    <!-- Kalkulator End -->
</body>
</html>