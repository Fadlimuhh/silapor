<section id="about" class="silapor-about">

    <div class="container">

        <div class="about-intro">

            <span class="section-eyebrow">TENTANG SILAPOR</span>

            <h2>
                Teknologi sederhana
                untuk masalah yang nyata.
            </h2>

            <p>
                SiLapor membantu masyarakat menyampaikan permasalahan
                di lingkungan kepada petugas tanpa proses yang rumit.
            </p>

        </div>

        <div class="row align-items-center about-main">

            <div class="col-lg-6">

                <div class="about-visual">

                    <div class="about-number">
                        <span>01</span>
                        <small>MUDAH</small>
                    </div>

                    <div class="about-image">
                        <img
                            src="{{ asset('assets-landing/img/about.jpg') }}"
                            alt="Tentang SiLapor"
                            class="img-fluid"
                        >
                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="about-content">

                    <span class="content-label">KENAPA SILAPOR?</span>

                    <h3>
                        Karena setiap laporan
                        layak untuk didengar.
                    </h3>

                    <p>
                        Masalah seperti jalan rusak, sampah, lampu jalan,
                        banjir, dan fasilitas umum dapat mengganggu
                        aktivitas masyarakat.
                    </p>

                    <p>
                        Dengan SiLapor, masyarakat dapat mengirimkan
                        laporan secara online dan mengetahui perkembangan
                        laporan tersebut.
                    </p>

                    <div class="about-points">

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Pelaporan mudah dan praktis</span>
                        </div>

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Status laporan dapat dipantau</span>
                        </div>

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Petugas dapat memberikan tanggapan</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

.silapor-about {
    padding: 130px 0;
    background: #fff;
}

.section-eyebrow,
.content-label {
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: #2563eb;
}

.about-intro {
    max-width: 800px;
    margin-bottom: 90px;
}

.about-intro h2 {
    font-size: clamp(42px, 5vw, 68px);
    line-height: 1.08;
    letter-spacing: -2.5px;
    color: #101828;
    margin: 18px 0 25px;
    font-weight: 800;
}

.about-intro p {
    font-size: 19px;
    line-height: 1.7;
    color: #667085;
    max-width: 650px;
}

.about-main {
    margin-top: 40px;
}

.about-visual {
    position: relative;
    padding-right: 50px;
}

.about-image {
    overflow: hidden;
    border-radius: 30px;
    background: #f2f4f7;
}

.about-image img {
    width: 100%;
    min-height: 480px;
    object-fit: cover;
}

.about-number {
    position: absolute;
    z-index: 2;
    top: 30px;
    left: -25px;
    width: 90px;
    height: 90px;
    border-radius: 20px;
    background: #111827;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0 20px 40px rgba(15,23,42,.2);
}

.about-number span {
    font-size: 26px;
    font-weight: 800;
}

.about-number small {
    font-size: 9px;
    letter-spacing: 1px;
    color: #98a2b3;
}

.about-content {
    padding-left: 60px;
}

.about-content h3 {
    font-size: 40px;
    line-height: 1.15;
    letter-spacing: -1.5px;
    color: #101828;
    font-weight: 800;
    margin: 18px 0 25px;
}

.about-content p {
    font-size: 16px;
    line-height: 1.8;
    color: #667085;
}

.about-points {
    margin-top: 30px;
}

.about-points div {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
    font-weight: 600;
    color: #344054;
}

.about-points i {
    color: #12b76a;
    font-size: 20px;
}

@media(max-width: 991px) {

    .about-content {
        padding: 50px 0 0;
    }

    .about-visual {
        padding-right: 20px;
    }

}

</style>