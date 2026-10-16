<section id="how-to-report" class="silapor-process">

    <div class="container">

        <div class="process-heading">

            <span class="section-eyebrow">CARA KERJA</span>

            <h2>
                Dari laporan
                menjadi tindakan.
            </h2>

            <p>
                Prosesnya sederhana. Kamu hanya perlu menyampaikan
                masalah, selanjutnya SiLapor membantu menghubungkan
                laporan dengan petugas.
            </p>

        </div>

        <div class="process-timeline">

            <div class="process-item">
                <div class="process-left">
                    <span>01</span>
                </div>

                <div class="process-icon">
                    <i class="bi bi-pencil-square"></i>
                </div>

                <div class="process-content">
                    <h3>Buat laporan</h3>
                    <p>
                        Isi informasi mengenai masalah yang kamu temukan,
                        mulai dari judul, kategori, deskripsi, alamat,
                        hingga foto jika diperlukan.
                    </p>
                </div>
            </div>

            <div class="process-item">
                <div class="process-left">
                    <span>02</span>
                </div>

                <div class="process-icon">
                    <i class="bi bi-send"></i>
                </div>

                <div class="process-content">
                    <h3>Kirim laporan</h3>
                    <p>
                        Periksa kembali informasi yang diberikan,
                        kemudian kirim laporan melalui SiLapor.
                    </p>
                </div>
            </div>

            <div class="process-item">
                <div class="process-left">
                    <span>03</span>
                </div>

                <div class="process-icon">
                    <i class="bi bi-person-check"></i>
                </div>

                <div class="process-content">
                    <h3>Petugas menindaklanjuti</h3>
                    <p>
                        Petugas menerima laporan, memeriksa informasi,
                        kemudian melakukan proses tindak lanjut.
                    </p>
                </div>
            </div>

            <div class="process-item">
                <div class="process-left">
                    <span>04</span>
                </div>

                <div class="process-icon success">
                    <i class="bi bi-check-lg"></i>
                </div>

                <div class="process-content">
                    <h3>Laporan selesai</h3>
                    <p>
                        Pantau status laporan dan lihat tanggapan
                        petugas melalui akun SiLapor.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>


<style>

.silapor-process {
    padding: 140px 0;
    background: #fff;
}

.process-heading {
    max-width: 800px;
    margin-bottom: 80px;
}

.process-heading h2 {
    font-size: clamp(42px, 5vw, 68px);
    line-height: 1.08;
    letter-spacing: -2.5px;
    font-weight: 800;
    color: #101828;
    margin: 18px 0 25px;
}

.process-heading p {
    font-size: 18px;
    line-height: 1.7;
    color: #667085;
    max-width: 650px;
}

.process-timeline {
    max-width: 900px;
}

.process-item {
    display: grid;
    grid-template-columns: 80px 75px 1fr;
    gap: 30px;
    padding: 35px 0;
    border-bottom: 1px solid #eaecf0;
}

.process-left span {
    font-size: 14px;
    font-weight: 800;
    color: #98a2b3;
}

.process-icon {
    width: 65px;
    height: 65px;
    border-radius: 18px;
    background: #eef4ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 25px;
}

.process-icon.success {
    background: #dcfae6;
    color: #12b76a;
}

.process-content h3 {
    margin: 0 0 10px;
    color: #101828;
    font-size: 25px;
    font-weight: 750;
}

.process-content p {
    margin: 0;
    color: #667085;
    line-height: 1.7;
    max-width: 600px;
}

@media(max-width: 767px) {

    .process-item {
        grid-template-columns: 35px 55px 1fr;
        gap: 15px;
    }

    .process-icon {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }

    .process-content h3 {
        font-size: 20px;
    }

    .process-content p {
        font-size: 14px;
    }

}

</style>