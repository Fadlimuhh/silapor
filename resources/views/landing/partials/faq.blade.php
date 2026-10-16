<section id="faq" class="silapor-faq">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <div class="faq-heading">

                    <span class="section-eyebrow">FAQ</span>

                    <h2>
                        Punya pertanyaan?
                    </h2>

                    <p>
                        Berikut beberapa pertanyaan yang sering
                        ditanyakan mengenai SiLapor.
                    </p>

                </div>

            </div>

            <div class="col-lg-7">

                <div class="faq-list">

                    <div class="faq-row">
                        <div class="faq-question">
                            <span>Bagaimana cara membuat laporan?</span>
                            <i class="bi bi-plus"></i>
                        </div>

                        <div class="faq-answer">
                            <p>
                                Masuk ke akun SiLapor, kemudian pilih
                                menu Buat Laporan. Isi informasi laporan
                                lalu kirim melalui sistem.
                            </p>
                        </div>
                    </div>

                    <div class="faq-row">
                        <div class="faq-question">
                            <span>Apakah laporan bisa dipantau?</span>
                            <i class="bi bi-plus"></i>
                        </div>

                        <div class="faq-answer">
                            <p>
                                Ya. Masyarakat dapat melihat status
                                laporan melalui akun masing-masing.
                            </p>
                        </div>
                    </div>

                    <div class="faq-row">
                        <div class="faq-question">
                            <span>Bagaimana laporan diproses?</span>
                            <i class="bi bi-plus"></i>
                        </div>

                        <div class="faq-answer">
                            <p>
                                Laporan yang masuk akan diperiksa oleh
                                petugas sebelum diproses dan ditindaklanjuti.
                            </p>
                        </div>
                    </div>

                    <div class="faq-row">
                        <div class="faq-question">
                            <span>Apakah petugas memberikan tanggapan?</span>
                            <i class="bi bi-plus"></i>
                        </div>

                        <div class="faq-answer">
                            <p>
                                Ya. Petugas dapat memberikan tanggapan
                                mengenai perkembangan laporan.
                            </p>
                        </div>
                    </div>

                    <div class="faq-row">
                        <div class="faq-question">
                            <span>Apakah SiLapor bisa digunakan di HP?</span>
                            <i class="bi bi-plus"></i>
                        </div>

                        <div class="faq-answer">
                            <p>
                                Ya. SiLapor dirancang agar dapat digunakan
                                melalui komputer maupun smartphone.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

.silapor-faq {
    padding: 140px 0;
    background: #f6f8fb;
}

.faq-heading {
    position: sticky;
    top: 100px;
}

.faq-heading h2 {
    font-size: clamp(42px, 5vw, 62px);
    line-height: 1.05;
    letter-spacing: -2px;
    font-weight: 800;
    color: #101828;
    margin: 18px 0;
}

.faq-heading p {
    color: #667085;
    font-size: 17px;
    line-height: 1.7;
    max-width: 400px;
}

.faq-list {
    border-top: 1px solid #d0d5dd;
}

.faq-row {
    border-bottom: 1px solid #d0d5dd;
    padding: 25px 0;
}

.faq-question {
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    color: #101828;
    font-size: 18px;
    font-weight: 650;
}

.faq-question i {
    font-size: 23px;
    transition: .3s;
}

.faq-answer {
    display: none;
    padding: 15px 40px 0 0;
}

.faq-answer p {
    margin: 0;
    color: #667085;
    line-height: 1.7;
}

.faq-row.active .faq-answer {
    display: block;
}

.faq-row.active .faq-question i {
    transform: rotate(45deg);
    color: #2563eb;
}

@media(max-width: 991px) {

    .faq-heading {
        position: static;
        margin-bottom: 60px;
    }

}

</style>


<script>

document.querySelectorAll('.faq-question').forEach(function(question) {

    question.addEventListener('click', function() {

        const item = this.closest('.faq-row');

        document.querySelectorAll('.faq-row').forEach(function(row) {

            if (row !== item) {
                row.classList.remove('active');
            }

        });

        item.classList.toggle('active');

    });

});

</script>