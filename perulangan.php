<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/yuki.png">
    <script src="assets/js/tailwind.js"></script>
    <title>Perulangan</title>
</head>
<body class="bg-slate-800">
    <!-- Perulangan Start -->
    <section class="pt-36">
     <div class="flex flex-col justify-center px-6 py-12 lg:px-8">
      <!-- <div class="top-10 bg-teal-500 rounded-xl"> -->
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" method="POST">
          <h1 class="text-center font-bold text-3xl text-white">Perulangan</h1>
          <div>
            <label class="text-sm font-medium leading-6 text-white" for="kalimat">Kalimat</label>
            <div class="mt-1">
              <input class="w-full p-2 rounded-md" id="kalimat" type="text" name="kalimat" placeholder="Masukkan kalimat yang ingin diulang"/>
            </div>
          </div>
  
          <div>
            <label class="text-sm font-medium leading-6 text-white" for="ulang">Perulangan</label>
            <div class="mt-1">
              <input class="w-full p-2 rounded-md" id="ulang" type="text" name="ulang" placeholder="Masukkan jumlah pengulangan"/>
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
                $kalimat = $_POST['kalimat'];
                $ulang = $_POST['ulang'];
                echo "<div class='mt-5'>";
            
                for ($i = 1; $i <= $ulang; $i++){
                echo "
                <p class='mt-3 text-center font-bold text-sm text-teal-600 leading-6 bg-white px-3 py-1.5 border border-teal-500 rounded-md'>
                $kalimat ke-$i
                </p>
                ";
                }   
                echo "</div>";
            }
          ?>
          </p>                 
        </form>
      </div>
     </div>
    </section>
    <!-- Perulangan End -->
</body>
</html>