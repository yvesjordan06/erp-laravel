@extends('base.dashboard')
@section('content')
    <div class="flex flex-wrap justify-around">

        <div class="card w-full bg-white">
            <div class="header">
            <span class="title">
                Employé
            </span>

                <div class="legend">

                    <div class="legend-item">Nouveau <span class="color-preview bg-red-500"></span> </div>
                    <div class="legend-item">Ancien <span class="color-preview bg-blue-500"></span> </div>
                    <div class="legend-item">Vacances <span class="color-preview bg-pink-500"></span> </div>
                    <div class="legend-item">Autres <span class="color-preview bg-teal-500"></span> </div>

                </div>
            </div>


            <div class="content">
                Ceci est le
                contenu
            </div>
        </div>

        <div class="card w-full bg-white">
            <div class="header">
                <span class="title">
                    Status
                </span>
                <div class="legend">
                    <div class="bg-gray-300 text-teal-500 p-2">
                        Employés : 2500
                    </div>
                    <div class="bg-gray-300 text-teal-500 p-2">
                        Prochain payement : 12 Juillet 2020
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
