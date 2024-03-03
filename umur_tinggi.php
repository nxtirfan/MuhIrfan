<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/yuki.png">
    <script src="assets/js/tailwind.js"></script>
    <title>Berat Badan</title>
</head>
<body class="bg-slate-800">
    <!-- Berat Badan Start -->
    <section class="pt-36">
     <div class="flex flex-col justify-center px-6 py-12 lg:px-8">
      <!-- <div class="top-10 bg-teal-500 rounded-xl"> -->
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" method="POST">
          <h1 class="text-center font-bold text-3xl text-white">Umur dan Tinggi Badan</h1>
          <div>
            <label class="text-sm font-medium leading-6 text-white" for="umur">Umur</label>
            <div class="mt-1">
              <input class="w-full p-2 rounded-md" id="umur" type="text" name="umur" placeholder="Masukkan umur" required/>
            </div>
          </div>
  
          <div>
            <label class="text-sm font-medium leading-6 text-white" for="tinggi">Tinggi Badan</label>
            <div class="mt-1">
              <input class="w-full p-2 rounded-md" id="tinggi" type="text" name="tinggi" placeholder="Masukkan tinggi badan" required/>
            </div>
          </div>
  
          <div class="mt-1">
            <button type="submit" name="submit"
              class="flex w-full justify-center rounded-md bg-teal-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              Submit
            </button>
          </div>
            <?php
              if (isset($_POST["submit"])) {
                  $umur = $_POST["umur"]; 
                  $tinggi = $_POST["tinggi"];
                  echo "<p class='mt-5 text-center font-bold text-sm text-teal-600 leading-6 bg-white px-3 py-1.5 border border-teal-500 rounded-md'>";
              
                  if ($umur >= 12 && $umur <= 17) {
                      echo "Umur kamu $umur tahun, kamu harus mulai belajar lebih giat<br><br>";
                  } elseif ($umur >= 18 && $umur <= 25) {
                      echo "Umur kamu $umur tahun, kamu sebaiknya kuliah atau melamar pekerjaan<br><br>";
                  } elseif ($umur <= 11) {
                      echo "Umur kamu $umur tahun, kamu masih anak anak<br><br>";
                  } else {
                      echo "Umur kamu $umur tahun, kamu sekarang sulit melamar pekerjaan<br><br>";
                  }
                  
                  if ($tinggi > 170) {
                    echo "Tinggi badan kamu $tinggi cm, kamu cukup tinggi";
                  } elseif ($tinggi >= 150 && $tinggi <= 170) {
                    echo "Tinggi badan kamu $tinggi cm, tinggi badan kamu ideal";
                  } else {
                    echo "Tinggi badan kamu $tinggi cm, kamu terlalu pendek";
                  }
              }
            ?>  
          </p>                 
        </form>
      </div>
     </div>
    </section>
    <!-- Berat Badan End -->
</body>
</html>