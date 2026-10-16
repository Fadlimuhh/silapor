<section id="contact" class="silapor-contact">

    <div class="container">

        <div class="contact-box">

            <div class="contact-glow"></div>

            <div class="contact-content">

                <span class="contact-label">
                    SIAP MEMBUAT PERUBAHAN?
                </span>

                <h2>
                    Ada masalah di sekitar kamu?
                    <span>Jangan hanya melihat.</span>
                </h2>

                <p>
                    Sampaikan laporan melalui SiLapor dan bantu
                    menciptakan lingkungan yang lebih baik.
                </p>

                <div class="contact-buttons">

                    <a href="{{ route('login') }}" class="contact-btn-primary">
                        Mulai Melapor
                        <i class="bi bi-arrow-right"></i>
                    </a>

                    <a href="{{ route('register') }}" class="contact-btn-secondary">
                        Buat Akun
                    </a>

                </div>

            </div>

        </div>

        <div class="contact-footer">

            <div>
                <strong>SI LAPOR</strong>
                <span>Sistem Pelaporan Masyarakat</span>
            </div>

            <div class="contact-info">
                <span>
                    <i class="bi bi-envelope"></i>
                    info@silapor.id
                </span>

                <span>
                    <i class="bi bi-telephone"></i>
                    021-12345678
                </span>
            </div>

        </div>

    </div>

</section>


<style>

.silapor-contact {
    padding: 100px 0 40px;
    background: #fff;
}

.contact-box {
    position: relative;
    overflow: hidden;
    min-height: 550px;
    border-radius: 35px;
    background: #101828;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.contact-glow {
    position: absolute;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    background: rgba(37,99,235,.35);
    filter: blur(100px);
    top: -300px;
    right: -100px;
}

.contact-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    padding: 70px 30px;
}

.contact-label {
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
    color: #84adff;
}

.contact-content h2 {
    margin: 25px 0;
    font-size: clamp(42px, 5vw, 68px);
    line-height: 1.08;
    letter-spacing: -2.5px;
    color: #fff;
    font-weight: 800;
}

.contact-content h2 span {
    color: #84adff;
}

.contact-content p {
    color: #98a2b3;
    font-size: 18px;
    line-height: 1.7;
    max-width: 600px;
    margin: 0 auto 35px;
}

.contact-buttons {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
}

.contact-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 20px;
    padding: 16px 22px 16px 25px;
    border-radius: 50px;
    background: #fff;
    color: #101828;
    text-decoration: none;
    font-weight: 700;
    transition: .3s;
}

.contact-btn-primary:hover {
    color: #fff;
    background: #2563eb;
    transform: translateY(-3px);
}

.contact-btn-primary i {
    font-size: 18px;
}

.contact-btn-secondary {
    padding: 16px 25px;
    border-radius: 50px;
    border: 1px solid #475467;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    transition: .3s;
}

.contact-btn-secondary:hover {
    background: #fff;
    color: #101828;
}

.contact-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 35px 5px 15px;
    color: #667085;
}

.contact-footer strong {
    display: block;
    color: #101828;
    font-size: 16px;
}

.contact-footer span {
    font-size: 12px;
}

.contact-info {
    display: flex;
    gap: 25px;
}

.contact-info span {
    display: flex;
    align-items: center;
    gap: 7px;
}

.contact-info i {
    color: #2563eb;
}

@media(max-width: 767px) {

    .contact-box {
        min-height: 500px;
        border-radius: 25px;
    }

    .contact-content h2 {
        font-size: 40px;
    }

    .contact-content p {
        font-size: 15px;
    }

    .contact-footer {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }

    .contact-info {
        flex-direction: column;
        gap: 8px;
    }

}

</style>