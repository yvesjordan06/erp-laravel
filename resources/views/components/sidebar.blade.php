<div class="flex h-full">
    <div class="bg-teal-600 w-16">
        <div class="m-auto py-16 lg:hidden w-full">
            <img src="{{asset('images/logo-small.png')}}" alt="Brains Logo">
        </div>

        <div class="px-2">
            <div class="h-48 mt-2 hidden lg:transition-all lg:block"></div>

            <div class="menu-icon selected">
                <span class="my-auto mdi mdi-account-group"></span>
            </div>
            <div class="menu-icon">
                <span class="my-auto mdi mdi-home"></span>
            </div>
            <div class="menu-icon">
                <span class="my-auto mdi mdi-account-group"></span>
            </div>
            <div class="menu-icon">
                <span class="my-auto mdi mdi-cash"></span>
            </div>
            <div class="menu-icon">
                <span class="my-auto mdi mdi-account-group"></span>
            </div>
            <div class="menu-icon">
                <span class="my-auto mdi mdi-information"></span>
            </div>
        </div>
    </div>
    <div class="bg-white w-64 hidden lg:inline">
        <div class=" w-full">
            <img class="m-auto" src="{{asset('images/logo.png')}}" alt="Brains Logo">
        </div>
        <div class="px-2">
            <a href="{{route('paiements')}}">
            <div class="menu-text selected">
                Acceuil
            </div>
            </a>
            <a href="{{route('employe')}}">
            <div class="menu-text">
               Employés
            </div>
            </a>
            <div class="menu-text">
                Salaire
            </div>
            <div class="menu-text">
                Embauche
            </div>
            <div class="menu-text">
                Resumé
            </div>
            <div class="menu-text">
                Autres
            </div>
        </div>

    </div>
</div>
