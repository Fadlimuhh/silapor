<nav class="navbar navbar-expand navbar-light topbar">

    <!-- Mobile Sidebar Toggle -->
    <button id="sidebarToggleTop"
            class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>


    <!-- Greeting -->
    <div class="silapor-greeting">

        <div class="greeting-icon">
            <i class="fas fa-bullhorn"></i>
        </div>

        <div>

            <div class="greeting-title" id="greeting">
                Selamat Datang
            </div>

            <div class="greeting-date" id="datetime">
                Memuat waktu...
            </div>

        </div>

    </div>


    <!-- Right Side -->
    <ul class="navbar-nav ml-auto">

        @auth

        <!-- User -->
        <li class="nav-item dropdown no-arrow">

            <a class="nav-link dropdown-toggle d-flex align-items-center"
               href="#"
               id="userDropdown"
               role="button"
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false">

                <span class="mr-3 d-none d-lg-inline text-gray-600 small font-weight-bold">
                    {{ Auth::user()->name }}
                </span>

                <img class="img-profile rounded-circle"
                     src="{{ asset('assets/img/undraw_profile.svg') }}"
                     alt="Profile">

            </a>


            <!-- Dropdown -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">

                <div class="px-3 py-2">

                    <div class="font-weight-bold text-dark"
                         style="font-size:13px;">
                        {{ Auth::user()->name }}
                    </div>

                    <div class="text-muted"
                         style="font-size:11px;">
                        {{ Auth::user()->email }}
                    </div>

                </div>

                <div class="dropdown-divider"></div>


                <!-- Profil -->
                <a class="dropdown-item"
                   href="{{ route('profile') }}">

                    <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>

                    Profil Saya

                </a>


                <!-- Role -->
                <div class="dropdown-item-text"
                     style="font-size:12px;">

                    <i class="fas fa-user-tag fa-sm fa-fw mr-2 text-primary"></i>

                    {{ ucfirst(Auth::user()->role) }}

                </div>


                <div class="dropdown-divider"></div>


                <!-- Logout -->
                <a class="dropdown-item"
                   href="#"
                   data-toggle="modal"
                   data-target="#logoutModal">

                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>

                    Keluar

                </a>

            </div>

        </li>

        @endauth

    </ul>

</nav>


<script>

function updateDateTime() {

    const now = new Date();

    const hour = now.getHours();

    let greeting = "";
    let icon = "";

    if (hour >= 5 && hour < 11) {

        greeting = "Selamat Pagi";
        icon = "🌅";

    } else if (hour >= 11 && hour < 15) {

        greeting = "Selamat Siang";
        icon = "☀️";

    } else if (hour >= 15 && hour < 18) {

        greeting = "Selamat Sore";
        icon = "🌤️";

    } else {

        greeting = "Selamat Malam";
        icon = "🌙";

    }


    @auth

    document.getElementById("greeting").innerHTML =
        icon + " " + greeting + ", {{ Auth::user()->name }}";

    @else

    document.getElementById("greeting").innerHTML =
        icon + " " + greeting;

    @endauth


    const waktu = now.toLocaleTimeString("id-ID");

    const tanggal = now.toLocaleDateString("id-ID", {

        weekday: "long",
        day: "numeric",
        month: "long",
        year: "numeric"

    });


    document.getElementById("datetime").innerHTML =
        "🕒 " + waktu + " WIB &nbsp; • &nbsp; " + tanggal;

}


updateDateTime();

setInterval(updateDateTime, 1000);

</script>