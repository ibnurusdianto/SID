<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Galeri foto dan video kegiatan serta acara di Desa Cigugur Bersemi.">
    <meta name="keywords" content="Galeri Desa, Foto Desa, Video Desa, Kegiatan Desa, Cigugur Bersemi">
    <meta name="author" content="Desa Cigugur Bersemi">
    <title>Gallery - Cigugur Bersemi</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('/assets/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/others/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/others/footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/others/gallery.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Cigugur Bersemi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('/') ?>">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('VisiMisi') ?>">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Kades') ?>">Profile Kepala Desa</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('Deskripsi') ?>">Deskripsi Singkat</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('Berita') ?>">Berita</a></li>
                            <li><a class="dropdown-item active" href="<?= base_url('Gallery') ?>">Photo Gallery</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('Agenda') ?>">Agenda Desa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Kontak') ?>">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold">Gallery Kegiatan Desa</h2>
                <p class="text-muted">Dokumentasi kegiatan dan acara di Desa Cigugur Bersemi</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="https://placehold.co/600x400?text=Kegiatan+Gotong+Royong" class="card-img-top"
                            alt="Kegiatan Gotong Royong">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-primary">
                                <i class="bi bi-camera-fill me-1"></i>Foto
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-2">
                            <button class="btn btn-light btn-sm rounded-circle view-media-btn" type="button"
                                data-bs-toggle="modal" data-bs-target="#mediaModal" data-type="image"
                                data-src="https://placehold.co/1200x800?text=Kegiatan+Gotong+Royong+Besar"
                                data-title="Gotong Royong Pembersihan Desa"
                                data-description="Kegiatan gotong royong rutin yang dilaksanakan setiap bulan untuk menjaga kebersihan dan keindahan lingkungan desa.">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-calendar3 text-muted me-2"></i>
                            <small class="text-muted">15 Januari 2025, 08:00 WIB</small>
                        </div>
                        <h5 class="card-title fw-bold">Gotong Royong Pembersihan Desa</h5>
                        <p class="card-text text-muted">Kegiatan gotong royong rutin yang dilaksanakan setiap bulan
                            untuk menjaga kebersihan dan keindahan lingkungan desa.</p>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-fill text-primary me-2"></i>
                            <small class="text-primary fw-semibold">Pemerintah Desa Cigugur Bersemi</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="https://placehold.co/600x400?text=Festival+Budaya" class="card-img-top"
                            alt="Festival Budaya">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-danger">
                                <i class="bi bi-play-fill me-1"></i>Video
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-2">
                            <button class="btn btn-light btn-sm rounded-circle view-media-btn" type="button"
                                data-bs-toggle="modal" data-bs-target="#mediaModal" data-type="video"
                                data-src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                                data-title="Festival Budaya Tahunan"
                                data-description="Perayaan festival budaya tahunan yang menampilkan berbagai pertunjukan seni dan budaya lokal dari masyarakat desa.">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="bi bi-play-circle-fill text-white" style="font-size: 3rem; opacity: 0.8;"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-calendar3 text-muted me-2"></i>
                            <small class="text-muted">10 Januari 2025, 19:00 WIB</small>
                        </div>
                        <h5 class="card-title fw-bold">Festival Budaya Tahunan</h5>
                        <p class="card-text text-muted">Perayaan festival budaya tahunan yang menampilkan berbagai
                            pertunjukan seni dan budaya lokal dari masyarakat desa.</p>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-fill text-primary me-2"></i>
                            <small class="text-primary fw-semibold">Karang Taruna Cigugur Bersemi</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="https://placehold.co/600x400?text=Pelatihan+UMKM" class="card-img-top"
                            alt="Pelatihan UMKM">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-primary">
                                <i class="bi bi-camera-fill me-1"></i>Foto
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-2">
                            <button class="btn btn-light btn-sm rounded-circle view-media-btn" type="button"
                                data-bs-toggle="modal" data-bs-target="#mediaModal" data-type="image"
                                data-src="https://placehold.co/1200x800?text=Pelatihan+UMKM+Digital+Lengkap"
                                data-title="Pelatihan UMKM Digital"
                                data-description="Workshop pelatihan untuk pelaku UMKM desa dalam memanfaatkan teknologi digital untuk mengembangkan usaha mereka.">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-calendar3 text-muted me-2"></i>
                            <small class="text-muted">08 Januari 2025, 13:00 WIB</small>
                        </div>
                        <h5 class="card-title fw-bold">Pelatihan UMKM Digital</h5>
                        <p class="card-text text-muted">Workshop pelatihan untuk pelaku UMKM desa dalam memanfaatkan
                            teknologi digital untuk mengembangkan usaha mereka.</p>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-fill text-primary me-2"></i>
                            <small class="text-primary fw-semibold">Dinas Koperasi & UMKM</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="https://placehold.co/600x400?text=Musyawarah+Desa" class="card-img-top"
                            alt="Musyawarah Desa">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-danger">
                                <i class="bi bi-play-fill me-1"></i>Video
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-2">
                            <button class="btn btn-light btn-sm rounded-circle view-media-btn" type="button"
                                data-bs-toggle="modal" data-bs-target="#mediaModal" data-type="video"
                                data-src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                                data-title="Musyawarah Desa Januari"
                                data-description="Musyawarah desa bulanan untuk membahas program kerja dan pembangunan infrastruktur desa tahun 2025.">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="bi bi-play-circle-fill text-white" style="font-size: 3rem; opacity: 0.8;"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-calendar3 text-muted me-2"></i>
                            <small class="text-muted">05 Januari 2025, 14:00 WIB</small>
                        </div>
                        <h5 class="card-title fw-bold">Musyawarah Desa Januari</h5>
                        <p class="card-text text-muted">Musyawarah desa bulanan untuk membahas program kerja dan
                            pembangunan infrastruktur desa tahun 2025.</p>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-fill text-primary me-2"></i>
                            <small class="text-primary fw-semibold">BPD Cigugur Bersemi</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="https://placehold.co/600x400?text=Vaksinasi+Massal" class="card-img-top"
                            alt="Vaksinasi Massal">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-primary">
                                <i class="bi bi-camera-fill me-1"></i>Foto
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-2">
                            <button class="btn btn-light btn-sm rounded-circle view-media-btn" type="button"
                                data-bs-toggle="modal" data-bs-target="#mediaModal" data-type="image"
                                data-src="https://placehold.co/1200x800?text=Program+Vaksinasi+Massal+Desa"
                                data-title="Program Vaksinasi Massal"
                                data-description="Kegiatan vaksinasi massal untuk masyarakat desa bekerjasama dengan Puskesmas setempat dalam rangka menjaga kesehatan warga.">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-calendar3 text-muted me-2"></i>
                            <small class="text-muted">03 Januari 2025, 09:00 WIB</small>
                        </div>
                        <h5 class="card-title fw-bold">Program Vaksinasi Massal</h5>
                        <p class="card-text text-muted">Kegiatan vaksinasi massal untuk masyarakat desa bekerjasama
                            dengan Puskesmas setempat dalam rangka menjaga kesehatan warga.</p>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-fill text-primary me-2"></i>
                            <small class="text-primary fw-semibold">Puskesmas Cigugur</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="https://placehold.co/600x400?text=Penanaman+Pohon" class="card-img-top"
                            alt="Penanaman Pohon">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-danger">
                                <i class="bi bi-play-fill me-1"></i>Video
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-2">
                            <button class="btn btn-light btn-sm rounded-circle view-media-btn" type="button"
                                data-bs-toggle="modal" data-bs-target="#mediaModal" data-type="video"
                                data-src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                                data-title="Aksi Penanaman 1000 Pohon"
                                data-description="Kegiatan penanaman pohon massal di area hutan desa sebagai komitmen menjaga kelestarian lingkungan dan mencegah erosi.">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="bi bi-play-circle-fill text-white" style="font-size: 3rem; opacity: 0.8;"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-calendar3 text-muted me-2"></i>
                            <small class="text-muted">01 Januari 2025, 07:00 WIB</small>
                        </div>
                        <h5 class="card-title fw-bold">Aksi Penanaman 1000 Pohon</h5>
                        <p class="card-text text-muted">Kegiatan penanaman pohon massal di area hutan desa sebagai
                            komitmen menjaga kelestarian lingkungan dan mencegah erosi.</p>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-fill text-primary me-2"></i>
                            <small class="text-primary fw-semibold">Kelompok Tani Cigugur</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <nav aria-label="Gallery pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true" aria-label="Previous">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-light pt-5">
        <div class="container px-5">
            <div class="row">
                <div class="col-6 col-lg-4">
                    <h3 class="fw-bold">Cigugur Bersemi</h3>
                    <p class="pt-2">321, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="mb-2"><a href="tel:08988109035" class="text-light text-decoration-none">08988109035</a>
                    </p>
                    <p>Dusun Kerajan 1</p>
                </div>
                <div class="col">
                    <h4>Menu</h4>
                    <ul class="list-unstyled pt-2">
                        <li class="py-1"><a href="<?= base_url('/') ?>"
                                class="text-light text-decoration-none">Beranda</a></li>
                        <li class="py-1"><a href="<?= base_url('VisiMisi') ?>"
                                class="text-light text-decoration-none">Visi dan Misi</a></li>
                        <li class="py-1"><a href="<?= base_url('Deskripsi') ?>"
                                class="text-light text-decoration-none">Deskripsi Singkat</a></li>
                        <li class="py-1"><a href="<?= base_url('Kades') ?>" class="text-light text-decoration-none">Data
                                Riwayat Kepala Desa</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Lanjutan</h4>
                    <ul class="list-unstyled pt-2">
                        <li class="py-1"><a href="<?= base_url('Demografis') ?>"
                                class="text-light text-decoration-none">Demografis</a></li>
                        <li class="py-1"><a href="<?= base_url('Lembaga') ?>"
                                class="text-light text-decoration-none">Lembaga</a></li>
                        <li class="py-1"><a href="<?= base_url('Berita') ?>"
                                class="text-light text-decoration-none">Berita</a></li>
                        <li class="py-1"><a href="<?= base_url('Gallery') ?>"
                                class="text-light text-decoration-none">Galeri</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 text-lg-end">
                    <h4>Social Media Links</h4>
                    <div class="social-media pt-2">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                            class="text-light fs-2 me-3" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://pinterest.com" target="_blank" rel="noopener noreferrer"
                            class="text-light fs-2 me-3" aria-label="Pinterest"><i class="bi bi-pinterest"></i></a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"
                            class="text-light fs-2 me-3" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="text-light fs-2"
                            aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr />
            <div class="d-sm-flex justify-content-between py-1">
                <p>&copy; 2025 Cigugur Jav. All rights reserved.</p>
                <p>
                    <a href="<?= base_url('Terms') ?>" class="text-light text-decoration-none pe-4">Terms of use</a>
                    <a href="<?= base_url('Privacy') ?>" class="text-light text-decoration-none">Privacy policy</a>
                </p>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediaModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div id="modalImageContainer" style="display: none;">
                        <img src="" class="img-fluid" id="modalImage" alt="Media Gallery">
                    </div>
                    <div id="modalVideoContainer" class="ratio ratio-16x9" style="display: none;">
                        <iframe id="modalVideo" src="" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <p class="mt-3 text-muted" id="modalDescription"></p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-primary btn-floating" id="back-to-top"
        style="position: fixed; bottom: 20px; right: 20px; display: none;">
        <i class="bi bi-arrow-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mediaModal = document.getElementById('mediaModal');
            var modalTitle = document.getElementById('mediaModalLabel');
            var modalImageContainer = document.getElementById('modalImageContainer');
            var modalImage = document.getElementById('modalImage');
            var modalVideoContainer = document.getElementById('modalVideoContainer');
            var modalVideo = document.getElementById('modalVideo');
            var modalDescription = document.getElementById('modalDescription');

            mediaModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var type = button.getAttribute('data-type');
                var src = button.getAttribute('data-src');
                var title = button.getAttribute('data-title');
                var description = button.getAttribute('data-description');

                modalTitle.textContent = title;
                modalDescription.textContent = description;

                modalImageContainer.style.display = 'none';
                modalVideoContainer.style.display = 'none';
                modalImage.src = '';
                modalVideo.src = '';

                if (type === 'image') {
                    modalImageContainer.style.display = 'block';
                    modalImage.src = src;
                } else if (type === 'video') {
                    modalVideoContainer.style.display = 'block';
                    modalVideo.src = src;
                }
            });

            mediaModal.addEventListener('hidden.bs.modal', function () {
                modalVideo.src = '';
            });

            window.onscroll = function () {
                var backToTop = document.getElementById('back-to-top');
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    backToTop.style.display = "block";
                } else {
                    backToTop.style.display = "none";
                }
            };

            document.getElementById('back-to-top').addEventListener('click', function (e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>