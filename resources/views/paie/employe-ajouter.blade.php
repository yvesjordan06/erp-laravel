<html>
<head>
    <title>BRAINS - Connexion</title>
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen font-sans">
<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-full md:w-2/3 ">
<div class="leading-loose">
    <form class="m-4 p-10 bg-white rounded shadow-xl">
        <div class="flex justify-between">
            <p class="text-gray-800 font-medium">Nouvel employé</p>
            <a href="{{ URL::previous() }}"><span class="text-red-400 font-medium mdi mdi-close text-2xl hover:text-red-700 cursor-pointer"></span></a>
        </div>

        <div class="">
            <label class="block text-sm text-gray-00" for="cus_name">Name</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Your Name" aria-label="Name">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="cus_email">Email</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Your Email" aria-label="Email">
        </div>
        <div class="mt-2">
            <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Street" aria-label="Email">
        </div>
        <div class="mt-2">
            <label class="hidden text-sm block text-gray-600" for="cus_email">City</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="City" aria-label="Email">
        </div>
        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="hidden block text-sm text-gray-600" for="cus_email">Country</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Country" aria-label="Email">
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="hidden block text-sm text-gray-600" for="cus_email">Zip</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="text" required="" placeholder="Zip" aria-label="Email">
        </div>
        <p class="mt-4 text-gray-800 font-medium">Information Professionnel</p>
        <div class="">
            <label class="block text-sm text-gray-600" for="cus_name">Poste</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Poste Souhaité" aria-label="Name">
        </div>
        <div class="">
            <label class="block text-sm text-gray-600" for="cus_name">Entreprise</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Entreprise actuelle" aria-label="Name">
        </div>
        <div class="mt-4">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-teal-600 rounded" type="submit">Ajouter</button>
        </div>
    </form>
</div>
    </div>
</div>
</body>
</html>
