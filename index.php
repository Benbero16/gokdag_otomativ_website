<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero-section text-center d-flex align-items-center justify-content-center">
    <div class="container position-relative z-1">
        <h1 class="display-3 fw-bold mb-3">Gökdağ Otomotiv</h1>
        <p class="lead mb-4">Profesyonel bakım, onarım ve garanti hizmetleri ile aracınız emin ellerde.</p>
        <a href="#appointment" class="btn btn-primary-custom btn-lg px-5 py-3 rounded-pill fw-bold shadow-sm">Hemen Randevu Al</a>
    </div>
</section>

<!-- Introduction -->
<section class="py-5">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-4">Güvenilir ve Uzman Hizmet</h2>
                <p class="text-secondary fs-5">
                    Bursa Küçük Sanayideki servis merkezimizde güvenilir ve uzman personellerimiz ile aracınızın tüm ihtiyaçları için size yardımcı oluyoruz.
                    Araç hasar onarımı, mini onarım, oto bakım ve koruma, mekanik bakım hizmetleri için Gökdağ Otomotiv'e güvenebilirsiniz.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Hizmetlerimiz</h2>
            <p class="text-secondary">Aracınız için sunduğumuz profesyonel çözümler</p>
        </div>
        
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card p-4 text-center">
                    <div class="service-icon">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Mekanik Bakım</h5>
                    <p class="text-secondary small">Motor, fren sistemleri, debriyaj ve tüm mekanik aksamların bakım ve onarımı.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card p-4 text-center">
                    <div class="service-icon">
                        <i class="bi bi-car-front-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Kaporta & Boya</h5>
                    <p class="text-secondary small">Dolu hasarı, çizik giderme ve profesyonel boya koruma işlemleri.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card p-4 text-center">
                    <div class="service-icon">
                        <i class="bi bi-stars"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Oto Bakım & Koruma</h5>
                    <p class="text-secondary small">Detaylı iç temizlik, seramik kaplama ve boya koruma hizmetleri.</p>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card p-4 text-center">
                    <div class="service-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Mini Onarım</h5>
                    <p class="text-secondary small">Küçük hasarlarınızı kasko bozulmadan hızlı ve etkili şekilde onarıyoruz.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Info (Accordion style for clean layout) -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4">Sıkça Sorulan Sorular</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                Hizmet garantisi sunuyor musunuz?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Evet, verdiğimiz kaliteli hizmetin teminatı olarak onarım işlemlerimizde işçilik garantisi sağlıyoruz. Parça değişimlerinde orijinal yedek parça ve garanti sunmaktayız.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Her marka ve model araca hizmet veriyor musunuz?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Arabanızın marka ve modeli fark etmeksizin bize emanet edebilirsiniz. Uzman ekibimiz tüm marka araçlarda deneyim sahibidir.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                Hangi sigorta şirketleri ile anlaşmanız var?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Türkiye’deki pek çok önde gelen sigorta firması ile anlaşmamız bulunmaktadır. Hasar onarım ve mini onarım işlemleriniz için bizimle iletişime geçebilirsiniz.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Appointment Form -->
            <div class="col-lg-6" id="appointment">
                <div class="card border-0 shadow-lg p-4 rounded-4">
                    <div class="card-body">
                        <h3 class="fw-bold mb-4 text-center">Hızlı Randevu Al</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small text-uppercase text-secondary fw-bold">Adınız Soyadınız</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" placeholder="Ad Soyad" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-uppercase text-secondary fw-bold">Telefon</label>
                                    <input type="tel" class="form-control bg-light border-0 py-2" placeholder="05XX XXX XX XX" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-uppercase text-secondary fw-bold">Plaka</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" placeholder="16 XX 1234" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-uppercase text-secondary fw-bold">Hizmet Türü</label>
                                    <select class="form-select bg-light border-0 py-2">
                                        <option>Mekanik Bakım</option>
                                        <option>Periyodik Bakım</option>
                                        <option>Hasar Onarımı</option>
                                        <option>Mini Onarım</option>
                                        <option>Oto Kuaför</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary-custom w-100 py-3 fw-bold rounded-3">Randevu Oluştur</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
