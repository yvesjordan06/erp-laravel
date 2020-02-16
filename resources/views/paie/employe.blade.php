@extends('base.dashboard')
@section('title', 'Employés')
@section('content')
    <div class="lg:flex">
        <div class="card bg-green-500 w-full lg:w-2/6">
            <div class="header">
                <span class="title">Total</span>
            </div>
            <div class="text-gray-200 text-2xl text-teal-200 p-8 text-center">
                14000 Employé
            </div>
        </div>

        <div class="card bg-orange-600 w-full lg:w-2/6">
            <div class="header">
                <span class="title">En congé</span>
            </div>
            <div class="text-gray-200 text-2xl text-teal-200 p-8 text-center">
                32 Employé
            </div>
        </div>

        <div class="card bg-blue-600 w-full lg:w-4/6">
            <div class="header">
                <span class="title">Salaire</span>
                <span class="legend">
                    <span class="legend-item">Fevrier 2020</span>
                </span>
            </div>
            <div class="text-gray-200 text-2xl text-teal-200 p-8 text-center">
                Tous est payé
            </div>
        </div>


    </div>
    <div class="card bg-white w-full">
        <div class="header">
            <span class="title">Ajouter un employé</span>
            <span class="legend">
                    <a href="{{route('employe.ajouter')}}"> <span class="text-center bg-teal-600 text-white hover:bg-teal-700 py-4  px-4 cursor-pointer rounded-lg lg:px-8">Ajouter</span></a>
                </span>
        </div>

    </div>
    <div >

        <table class="text-left w-full">
            <thead class="bg-teal-600 flex text-white w-full">
            <tr class="flex w-full">
                <th class="p-4 w-1/5">Nom</th>
                <th class="p-4 w-1/5">Poste</th>
                <th class="p-4 w-1/5">Salaire</th>
                <th class="p-4 w-1/5">Entreprise</th>
                <th class="p-4 w-1/5">Actions</th>
            </tr>
            </thead>
            <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
            <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full bg-white" style="height: 50vh;">
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/5">Hiro</td>
                <td class="p-4 w-1/5">Commerçant</td>
                <td class="p-4 w-1/5">35000 F</td>
                <td class="p-4 w-1/5">LACAPES</td>
                <td class="p-4 w-1/5">
                    <button class="btn bg-red-600">Licencier</button>
                    <a href="{{route('employe.voir')}}"><button class="btn bg-teal-600">Voir</button></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
