<section id="services" class="silapor-services">

    <div class="container">

        <div class="services-heading">

            <span class="section-eyebrow">FITUR SILAPOR</span>

            <h2>
                Semua yang kamu butuhkan
                untuk sebuah laporan.
            </h2>

            <p>
                Dari mengirim laporan hingga mengetahui perkembangannya,
                semuanya tersedia dalam satu sistem.
            </p>

        </div>

        <div class="services-list">

            <div class="service-large">
                <div class="service-number">01</div>

                <div class="service-icon">
                    <i class="bi bi-file-earmark-plus"></i>
                </div>

                <div class="service-content">
                    <h3>Laporkan dengan mudah.</h3>
                    <p>
                        Buat laporan secara online dengan mengisi
                        judul, kategori, deskripsi, alamat, dan foto.
                    </p>
                </div>

                <i class="bi bi-arrow-up-right service-arrow"></i>
            </div>

            <div class="service-large">
                <div class="service-number">02</div>

                <div class="service-icon">
                    <i class="bi bi-activity"></i>
                </div>

                <div class="service-content">
                    <h3>Pantau perkembangannya.</h3>
                    <p>
                        Ketahui apakah laporan masih menunggu,
                        sedang diproses, atau sudah selesai.
                    </p>
                </div>

                <i class="bi bi-arrow-up-right service-arrow"></i>
            </div>

            <div class="service-large">
                <div class="service-number">03</div>

                <div class="service-icon">
                    <i class="bi bi-chat-left-text"></i>
                </div>

                <div class="service-content">
                    <h3>Dapatkan tanggapan.</h3>
                    <p>
                        Petugas dapat memberikan tanggapan
                        mengenai laporan yang telah dikirim.
                    </p>
                </div>

                <i class="bi bi-arrow-up-right service-arrow"></i>
            </div>

        </div>

    </div>

</section>


<style>

.silapor-services {
    padding: 140px 0;
    background: #f6f8fb;
}

.services-heading {
    max-width: 800px;
    margin-bottom: 70px;
}

.services-heading h2 {
    font-size: clamp(42px, 5vw, 68px);
    line-height: 1.08;
    letter-spacing: -2.5px;
    color: #101828;
    font-weight: 800;
    margin: 18px 0 25px;
}

.services-heading p {
    color: #667085;
    font-size: 18px;
    line-height: 1.7;
    max-width: 650px;
}

.services-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.service-large {
    position: relative;
    display: grid;
    grid-template-columns: 80px 80px 1fr 40px;
    align-items: center;
    gap: 25px;
    padding: 35px;
    border-radius: 25px;
    background: #fff;
    border: 1px solid #eaecf0;
    transition: .35s;
}

.service-large:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 60px rgba(15,23,42,.08);
}

.service-number {
    color: #98a2b3;
    font-size: 13px;
    font-weight: 700;
}

.service-icon {
    width: 65px;
    height: 65px;
    border-radius: 18px;
    background: #eef4ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 27px;
}

.service-content h3 {
    font-size: 24px;
    color: #101828;
    font-weight: 750;
    margin-bottom: 8px;
}

.service-content p {
    margin: 0;
    color: #667085;
    line-height: 1.6;
}

.service-arrow {
    font-size: 22px;
    color: #98a2b3;
}

.service-large:hover .service-arrow {
    color: #2563eb;
    transform: translate(3px,-3px);
}

@media(max-width: 767px) {

    .service-large {
        grid-template-columns: 45px 60px 1fr;
        gap: 15px;
        padding: 25px;
    }

    .service-arrow {
        display: none;
    }

    .service-icon {
        width: 55px;
        height: 55px;
        font-size: 22px;
    }

    .service-content h3 {
        font-size: 19px;
    }

    .service-content p {
        font-size: 13px;
    }

}

</style>