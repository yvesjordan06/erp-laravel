<html>
<head>
    <title>BRAINS - Inscription</title>
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen font-sans">
<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-full md:w-2/3 ">
        <div class="block lg:flex bg-white lg:shadow-lg rounded-lg">
            <div class="w-full lg:w-1/3 flex lg:border-r border-gray-200">
                <div class="m-auto rounded-full">
                    <a href="/" class="flex items-base pt-10 lg:p-2 -mb-10 lg:-mb-0">
                        <img src="{{asset('images/logo-small.png')}}" alt="Brains Logo" class="w-12 lg:w-48 lg:hidden">
                        <img src="{{asset('images/logo.png')}}" alt="Brains Logo" class="w-12 lg:w-48 hidden lg:block">
                        <div
                            class="block lg:hidden text-2xl text-primary hover:text-primary tracking-wide font-semibold uppercase">
                            Brains
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-2/3 px-6 py-16">
                <div class="mb-4 font-light tracking-widest text-2xl">INSCRIPTION</div>
                <form>
                    <div class="lg:flex">
                        <div class="mb-4 mr-1">
                            <label for="email" class="block mb-2 text-sm text-gray-800">Nom</label>
                            <input type="email" name="email" id="email"
                                   class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                                   autocomplete="email" required>
                            <div v-if="feedback.email.error">
                                <div class="text-sm text-red-500 mt-2" v-text="feedback.email.message"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm text-gray-800">Prenom</label>
                            <input type="email" name="email" id="email"
                                   class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                                   autocomplete="email" required>
                            <div v-if="feedback.email.error">
                                <div class="text-sm text-red-500 mt-2" v-text="feedback.email.message"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm text-gray-800">Email</label>
                        <input type="email" name="email" id="email"
                               class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                               autocomplete="email" required>
                        <div v-if="feedback.email.error">
                            <div class="text-sm text-red-500 mt-2" v-text="feedback.email.message"></div>
                        </div>
                    </div>
                    <div class="lg:flex">
                    <div class="mb-4 mr-1">
                        <label for="password" class="block mb-2 text-sm text-gray-800">Mot de passe</label>
                        <input type="password" name="password" id="password"
                               class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                               autocomplete="current-password" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-2 text-sm text-gray-800">Confirmer le mot de passe</label>
                        <input type="password" name="password" id="password"
                               class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                               autocomplete="current-password" required>
                    </div>
                    </div>
                    <label class="mb-4 flex items-center">
                        <input type="checkbox" class="form-checkbox" name="remember" id="remember" checked>
                        <span class="ml-2">Se rappeler de moi ?</span>
                    </label>
                    <div class="block md:flex items-center justify-between">
                        <button type="submit"
                                class="align-middle bg-teal-600 hover:bg-teal-700 text-center px-4 py-2 text-white text-sm font-semibold rounded-lg inline-block shadow-lg">
                            S'inscrire
                        </button>

                        <a class="text-teal-600 hover:text-teal-700 no-underline block mt-3" href="{{route('connexion')}}">
                            Deja un compte? Se connecter
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>
