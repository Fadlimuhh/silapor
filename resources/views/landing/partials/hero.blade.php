<section id="hero" class="silapor-hero">

    <div class="container">
        <div class="row align-items-center min-vh-100 py-5">

            <div class="col-lg-6">
                <div class="hero-content">

                    <div class="hero-eyebrow">
                        <span class="hero-dot"></span>
                        SISTEM PELAPORAN MASYARAKAT
                    </div>

                    <h1>
                        Suaramu,
                        <span>perubahan</span>
                        untuk lingkungan.
                    </h1>

                    <p>
                        Laporkan masalah di sekitar kamu dengan mudah,
                        pantau prosesnya, dan lihat tindak lanjutnya
                        sampai selesai.
                    </p>

                    <div class="hero-buttons">

                        <a href="{{ route('login') }}" class="hero-btn-primary">
                            <span>Mulai Melapor</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <a href="#how-to-report" class="hero-btn-secondary">
                            Cara Kerja
                        </a>

                    </div>

                    <div class="hero-note">
                        <i class="bi bi-shield-check"></i>
                        Mudah digunakan · Transparan · Dapat dipantau
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-visual">

                    <div class="hero-glow"></div>

                    <div class="hero-image-card">
                        <img
                            src="{{ asset('assets-landing/img/hero-img.png') }}"
                            alt="SiLapor"
                            class="img-fluid"
                        >
                    </div>

                    <div class="floating-card floating-card-one">
                        <div class="floating-icon">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div>
                            <strong>Laporan diproses</strong>
                            <small>Petugas sedang menindaklanjuti</small>
                        </div>
                    </div>

                    <div class="floating-card floating-card-two">
                        <div class="floating-icon blue">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <div>
                            <strong>Laporan baru</strong>
                            <small>Berhasil dikirim</small>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>


<style>

.silapor-hero {
    min-height: 100vh;
    background:
        radial-gradient(circle at 80% 30%, rgba(13,110,253,.12), transparent 30%),
        linear-gradient(180deg, #ffffff 0%, #f7faff 100%);
    overflow: hidden;
}

.hero-content {
    max-width: 650px;
}

.hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #2563eb;
    margin-bottom: 25px;
}

.hero-dot {
    width: 8px;
    height: 8px;
    background: #2563eb;
    border-radius: 50%;
    box-shadow: 0 0 0 5px rgba(37,99,235,.1);
}

.silapor-hero h1 {
    font-size: clamp(48px, 6vw, 82px);
    line-height: 1.02;
    font-weight: 800;
    letter-spacing: -3px;
    color: #101828;
    margin-bottom: 28px;
}

.silapor-hero h1 span {
    color: #2563eb;
}

.silapor-hero p {
    max-width: 570px;
    font-size: 19px;
    line-height: 1.7;
    color: #667085;
    margin-bottom: 35px;
}

.hero-buttons {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
}

.hero-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 20px;
    padding: 16px 22px 16px 25px;
    border-radius: 50px;
    background: #111827;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    transition: .3s;
}

.hero-btn-primary:hover {
    color: #fff;
    transform: translateY(-3px);
    background: #2563eb;
}

.hero-btn-primary i {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: rgba(255,255,255,.15);
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-btn-secondary {
    padding: 15px 23px;
    border-radius: 50px;
    color: #344054;
    text-decoration: none;
    font-weight: 600;
    transition: .3s;
}

.hero-btn-secondary:hover {
    background: #eef4ff;
    color: #2563eb;
}

.hero-note {
    margin-top: 28px;
    color: #98a2b3;
    font-size: 13px;
}

.hero-note i {
    color: #12b76a;
    margin-right: 6px;
}

.hero-visual {
    position: relative;
    min-height: 570px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-glow {
    position: absolute;
    width: 430px;
    height: 430px;
    border-radius: 50%;
    background: rgba(37,99,235,.09);
    filter: blur(5px);
}

.hero-image-card {
    position: relative;
    width: 90%;
    padding: 40px;
    z-index: 2;
}

.hero-image-card img {
    width: 100%;
    filter: drop-shadow(0 30px 50px rgba(15,23,42,.15));
    animation: heroFloat 5s ease-in-out infinite;
}

.floating-card {
    position: absolute;
    z-index: 5;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px 18px;
    background: rgba(255,255,255,.95);
    border: 1px solid rgba(226,232,240,.8);
    border-radius: 16px;
    box-shadow: 0 20px 50px rgba(15,23,42,.12);
    backdrop-filter: blur(10px);
}

.floating-card strong {
    display: block;
    color: #101828;
    font-size: 13px;
}

.floating-card small {
    display: block;
    color: #98a2b3;
    font-size: 11px;
    margin-top: 3px;
}

.floating-icon {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    background: #dcfae6;
    color: #12b76a;
    display: flex;
    align-items: center;
    justify-content: center;
}

.floating-icon.blue {
    background: #eaf2ff;
    color: #2563eb;
}

.floating-card-one {
    top: 17%;
    left: 0;
    animation: floatingOne 4s ease-in-out infinite;
}

.floating-card-two {
    right: 0;
    bottom: 17%;
    animation: floatingTwo 4.5s ease-in-out infinite;
}

@keyframes heroFloat {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-12px); }
}

@keyframes floatingOne {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}

@keyframes floatingTwo {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(8px); }
}

@media(max-width: 991px) {

    .silapor-hero h1 {
        font-size: 52px;
        letter-spacing: -2px;
    }

    .hero-visual {
        min-height: 420px;
        margin-top: 20px;
    }

    .floating-card-one {
        left: 2%;
    }

    .floating-card-two {
        right: 2%;
    }

}

@media(max-width: 575px) {

    .silapor-hero h1 {
        font-size: 42px;
    }

    .silapor-hero p {
        font-size: 16px;
    }

    .hero-visual {
        min-height: 330px;
    }

    .hero-image-card {
        padding: 10px;
    }

    .floating-card {
        padding: 10px;
    }

    .floating-card strong {
        font-size: 11px;
    }

    .floating-card small {
        font-size: 9px;
    }

}

</style>