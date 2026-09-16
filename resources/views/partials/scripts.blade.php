<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

<script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script> 

<script>
function updateClock() {
    const now = new Date();

    const jam = now.toLocaleTimeString('id-ID', {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
    });

    const tanggal = now.toLocaleDateString('id-ID', {
        weekday: 'long',
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    });

    document.getElementById("clock").innerHTML =
        '<i class="fas fa-clock text-primary"></i> ' + jam + ' WIB';

    document.getElementById("date").innerHTML =
        '<i class="far fa-calendar-alt"></i> ' + tanggal;
}

updateClock();
setInterval(updateClock, 1000);
</script>