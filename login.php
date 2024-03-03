<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="src/output.css" rel="stylesheet"> -->
    <script src="assets/js/tailwind.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/img/yuki.png">
    <title>Login Page</title>
</head>

<body>
 <!-- LOGIN START -->

  <!-- Heading Start -->
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="assets/img/firefly.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login</h2>
        </div>
        <!-- Heading Endnpx tailwindcss -i ./src/input.css -o ./src/output.css --watch -->

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="username" autocomplete="username" required
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <!-- <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div> -->
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" name="submit" 
                        class="flex w-full justify-center rounded-md bg-teal-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            </form>
    <?php
    if (isset($_POST["submit"])) {
        session_start();

        $valid_username = "irfan";
        $valid_password = "irfan123";

        $input_username = $_POST["username"];
        $input_password = $_POST["password"];

            if ($input_username == $valid_username && $input_password == $valid_password) {
                // Set session variables
                $_SESSION["username"] = $valid_username;
                $_SESSION["logged_in"] = true;
    
                header("Location: index.html");
                exit();
            } else {
                echo "
                <p class='mt-5 text-center text-sm text-red-600 leading-6 bg-red-200 px-3 py-1.5 border border-red-500 rounded-md'>
                    <span class='font-semibold'>Error: </span>Authentication failed. Please try again.
                </p>
                ";
            }
        }
    ?>

        </div>
  </div>
    <!-- <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free
        trial</a> -->
    <!-- LOGIN ENDED -->
</body>

</html>