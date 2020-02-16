@extends('base.dashboard')
@section('title', 'Hiro Hamada')
@section('content')
    <div class="w-full bg-white flex flex-row flex-wrap p-3">
        <div class="w-2/3 mx-auto  lg:mx-0 lg:w-full">
            <!-- Profile Card -->
            <div class="rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased" style="
                background-image: url('{{asset('images/bg')}}');
                background-repeat: no-repat;
                background-size: cover;
                background-blend-mode: multiply;
                ">
                <div class="md:w-1/3 w-full">
                    <img class="rounded-lg shadow-lg antialiased" src="{{asset('images/user.png')}}">
                </div>
                <div class="md:w-2/3 w-full px-3 flex flex-row flex-wrap">
                    <div class="w-full text-right text-gray-700 font-semibold relative pt-3 md:pt-0">
                        <div class="text-2xl text-white leading-tight">Hiro Hamade</div>
                        <div class="text-normal text-gray-300 hover:text-gray-400 cursor-pointer"><span
                                class="border-b border-dashed border-gray-500 pb-1">Chef Commercial</span></div>
                        <div
                            class="text-sm text-gray-300 hover:text-gray-400 cursor-pointer md:absolute pt-3 md:pt-0 bottom-0 right-0">
                            Embauché: <b>il y'a 6 ans</b></div>
                    </div>
                </div>
            </div>
            <!-- End Profile Card -->
            <div class="mt-2">
                <p class="font-medium text-xl my-2">Information de l'employé</p>
                <div class="divider"></div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Nom :</span>
                    <span class="font-normal text-gray-700 mx-4">Hiro</span>
                </div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Prenom :</span>
                    <span class="font-normal text-gray-700 mx-4">Hamada</span>
                </div>
                 <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Sexe :</span>
                    <span class="font-normal text-gray-700 mx-4">Inconnu</span>
                </div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Telephone :</span>
                    <span class="font-normal text-gray-700 mx-4">+237 600090000</span>
                </div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Addresse :</span>
                    <span class="font-normal text-gray-700 mx-4">Yaoundé - Odja</span>
                </div>

            </div>

            <div class="mt-6">
                <p class="font-medium text-xl my-2">Information professionel</p>
                <div class="divider"></div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Poste :</span>
                    <span class="font-normal text-gray-700 mx-4">Chef Commercial</span>
                </div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Salaire :</span>
                    <span class="font-normal text-gray-700 mx-4">35 000 FCFA</span>
                </div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Departement :</span>
                    <span class="font-normal text-gray-700 mx-4">Ventes et publicité</span>
                </div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Issue :</span>
                    <span class="font-normal text-gray-700 mx-4">Rien a signaler</span>
                </div>

            </div>

            <div class="mt-6">
                <p class="font-medium text-xl my-2">Profil sociale</p>
                <div class="divider"></div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">En location :</span>
                    <span class="font-normal text-gray-700 mx-4">Oui</span>
                </div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Stat matrimonial :</span>
                    <span class="font-normal text-gray-700 mx-4">Marié(e)</span>
                </div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Nombre d'enfants :</span>
                    <span class="font-normal text-gray-700 mx-4">12</span>
                </div>
                <div class="flex sm:flex-wrap mt-2">
                    <span class="font-semibold text-teal-800">Assurance Maladie :</span>
                    <span class="font-normal text-gray-700 mx-4">Oui</span>
                </div>

            </div>
        </div>
    </div>
@endsection
