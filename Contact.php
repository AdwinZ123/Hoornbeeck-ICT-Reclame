<?php

if (isset($_POST["Mail"])) {
    // Mail Data
    $firstName = $_POST["FirstName"];
    $lastname = $_POST["Lastname"];
    $mail = $_POST["Mail"];
    $phonenumber = $_POST["Phonenumber"];
    $adminSubject = $_POST["Subject"];
    $userSubject = "Bedankt voor uw bericht!";
    $message = $_POST["Message"];

    // Mail to User

    $to = $mail;
    $body = "";

    $body .= "Hey " . $firstName . " " . $lastname . ",\r\n";
    $body .= "\r\n";
    $body .= "Bedankt voor uw bericht! We zullen ons best doen zo snel mogelijk te reageren.\r\n";
    $body .= "\r\n";
    $body .= "Met vriendelijke groet,\r\n";
    $body .= "Hoornbeeck ICT\r\n";

    mail($to, $userSubject, $body);

    // Mail to Admin

    $to = "info@hoornbeeckict.nl";
    $body = "";

    $body .= "Van: " . $firstName . " " . $lastname . "\r\n";
    $body .= "Email: " . $mail . "\r\n";
    $body .= "Telefoonnummer: " . $phonenumber . "\r\n";
    $body .= "Bericht: " . $message . "\r\n";

    mail($to, $adminSubject, $body);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - Hoornbeeck ICT</title>
    <link rel="shortcut icon" href="faviconHoornbeeckICT.ico" />
    <link rel="stylesheet" href="/css/site.css" asp-append-version="true" />
    <link rel="stylesheet" href="/Opdracht_Programmeren.styles.css" asp-append-version="true" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden">
    <header class="scroll flex items-center w-screen px-20 mb-5 fixed top-0 backdrop-blur-md z-50">
        <div>
            <a href="Index.html"><img src="../img/logo.png" class="w-1/5 p-3" /></a>
        </div>
        <div class="flex flex-grow justify-end gap-10">
            <a href="Index.html">
                <h1 class="font-bold text-xl">Home</h1>
            </a>
            <a href="quiz.html">
                <h1 class="font-bold text-xl">Quiz</h1>
            </a>
            <a href="Contact.php">
                <h1 class="font-bold text-xl underline underline-offset-4 decoration-2">Contact</h1>
            </a>
        </div>
    </header>
    <div>
        <main role="main" class="pb-border-3">
            <div>
                <img class="w-screen h-screen object-cover absolute" src="../img/banner.jpg" alt="Banner Background" />

                <div class="absolute left-1/2 top-1/2 mt-30 w-9/12 flex justify-around" style="transform: translate(-50%, -50%);">
                    <div class="w-full max-w-xs">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="Contact.php" method="post">
                            <div class="text-red-500"></div>
                            <div class="form-group">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="FirstName">Voornaam</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Vul uw voornaam in..." name="FirstName" id="FirstName" type="text" required />
                            </div>
                            <br />
                            <div class="form-group">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="Lastname">Achternaam</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Vul uw achternaam in..." name="Lastname" id="Lastname" type="text" required />
                            </div>
                            <br />
                            <div class="form-group">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="Mail">E-Mail</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Vul uw e-mail in..." name="Mail" id="Mail" type="email" required />
                            </div>
                            <br />
                            <div class="form-group">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="Phonenumber">Telefoonnummer</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Vul uw telefoonnummer in..." name="Phonenumber" id="Phonenumber" type="tel" required />
                            </div>
                            <br />
                            <div class="form-group">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="Subject">Onderwerp</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Vul het onderwerp in..." name="Subject" id="Subject" type="text" required />
                            </div>
                            <br />
                            <div class="form-group">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="Message">Bericht</label>
                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Vul uw bericht in..." name="Message" id="Message" required></textarea>
                            </div>
                            <br />
                            <div class="form-group">
                                <input type="submit" value="Stuur" class="shadow text-white focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" style="background-color:  #216361;" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="text-center font-bold py-3">
        © Copyright Hoornbeeck 2022
    </footer>

    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/js/navbar.js"></script>
    <script src="/js/site.js" asp-append-version="true"></script>
</body>

</html>