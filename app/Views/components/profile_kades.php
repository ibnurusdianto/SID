<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profil lengkap Kepala Desa dan riwayat kepemimpinan Desa Cigugur Bersemi.">
    <meta name="keywords" content="Kepala Desa, Riwayat Kepala Desa, Profil Kades, Cigugur Bersemi">
    <meta name="author" content="Desa Cigugur Bersemi">
    <title>Profile Kepala Desa - Cigugur Bersemi</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('/assets/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= base_url('/others/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/others/footer.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('VisiMisi') ?>">Visi dan Misi</a></li>
                            <li><a class="dropdown-item active" href="<?= base_url('Kades') ?>">Profile Kepala Desa</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('Deskripsi') ?>">Deskripsi Singkat</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('Berita') ?>">Berita</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Gallery') ?>">Photo Gallery</a></li>
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

    <div class="container-fluid bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Riwayat Kepala Desa</h1>
                    <p class="lead">Desa Cigugur Bersemi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 shadow-lg border-0">
                    <div class="position-relative">
                        <img src="<?= base_url('assets/kades-kawe.jpg') ?>" class="card-img-top"
                            alt="Foto Kepala Desa Ahmad Suryadi" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success fs-6">Aktif</span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-3">
                            <button class="btn btn-light btn-sm rounded-circle" title="Lihat Foto"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-img-src="<?= base_url('assets/kades-kawe.jpg') ?>">
                                <i class="bi bi-eye fs-5"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4 class="card-title fw-bold text-primary mb-0">Bapak Ahmad Suryadi, S.Sos</h4>
                            <small class="text-muted">2020 - Sekarang</small>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted d-block">Masa Jabatan</small>
                                <strong>4 Tahun (Periode ke-3)</strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Status</small>
                                <span class="badge bg-success">Kepala Desa Aktif</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="fw-bold text-secondary">
                                <i class="bi bi-bullseye me-2"></i>Visi
                            </h6>
                            <p class="card-text small">
                                "Mewujudkan Desa Cigugur Bersemi yang mandiri, sejahtera, dan berkarakter
                                melalui pembangunan berkelanjutan dan pemberdayaan masyarakat."
                            </p>
                        </div>

                        <div class="mb-3">
                            <h6 class="fw-bold text-secondary">
                                <i class="bi bi-list-check me-2"></i>Misi
                            </h6>
                            <ul class="list-unstyled small">
                                <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Meningkatkan
                                    kualitas pelayanan publik</li>
                                <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Mengembangkan
                                    potensi ekonomi desa</li>
                                <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Memperkuat
                                    gotong royong masyarakat</li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted d-block">Pendidikan</small>
                                <strong>S1 Sosiologi</strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Pengalaman</small>
                                <strong>15 Tahun</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar-event me-1"></i>
                                Dilantik: 15 Februari 2020
                            </small>
                            <div>
                                <a href="<?= base_url('Kades/Detail/AhmadSuryadi') ?>"
                                    class="btn btn-outline-primary btn-sm me-2">
                                    <i class="bi bi-person-lines-fill me-1"></i>Detail
                                </a>
                                <a href="tel:+6281234567890" class="btn btn-primary btn-sm">
                                    <i class="bi bi-telephone me-1"></i>Kontak
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 shadow border-0">
                    <div class="position-relative">
                        <img src="<?= base_url('assets/kades-kawe.jpg') ?>" class="card-img-top"
                            alt="Foto Kepala Desa Suharto Wijaya" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary fs-6">Non-Aktif</span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-3">
                            <button class="btn btn-light btn-sm rounded-circle" title="Lihat Foto"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-img-src="<?= base_url('assets/kades-kawe.jpg') ?>">
                                <i class="bi bi-eye fs-5"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4 class="card-title fw-bold text-secondary mb-0">Bapak Suharto Wijaya</h4>
                            <small class="text-muted">2014 - 2020</small>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted d-block">Masa Jabatan</small>
                                <strong>6 Tahun (Periode ke-2)</strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Status</small>
                                <span class="badge bg-secondary">Masa Jabatan Berakhir</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="fw-bold text-secondary">
                                <i class="bi bi-bullseye me-2"></i>Visi
                            </h6>
                            <p class="card-text small">
                                "Membangun Desa Cigugur Bersemi yang maju, adil, dan makmur
                                dengan mengedepankan nilai-nilai kearifan lokal."
                            </p>
                        </div>

                        <div class="mb-3">
                            <h6 class="fw-bold text-secondary">
                                <i class="bi bi-award me-2"></i>Prestasi Utama
                            </h6>
                            <ul class="list-unstyled small">
                                <li class="mb-1"><i class="bi bi-trophy-fill text-warning me-2"></i>Desa Terbaik Tingkat
                                    Kabupaten 2018</li>
                                <li class="mb-1"><i class="bi bi-trophy-fill text-warning me-2"></i>Program BUMDes
                                    Terbaik 2019</li>
                                <li class="mb-1"><i class="bi bi-trophy-fill text-warning me-2"></i>Desa Mandiri Energi
                                    2020</li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted d-block">Pendidikan</small>
                                <strong>SMA/Sederajat</strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Pengalaman</small>
                                <strong>20 Tahun</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar-x me-1"></i>
                                Berakhir: 14 Februari 2020
                            </small>
                            <div>
                                <a href="<?= base_url('Kades/Arsip/SuhartoWijaya') ?>"
                                    class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-archive me-1"></i>Arsip
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 shadow border-0">
                    <div class="position-relative">
                        <img src="<?= base_url('assets/kades-kawe.jpg') ?>" class="card-img-top"
                            alt="Foto Kepala Desa Kartono Sumarno" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-info fs-6">Pendiri</span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-3">
                            <button class="btn btn-light btn-sm rounded-circle" title="Lihat Foto"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-img-src="<?= base_url('assets/kades-kawe.jpg') ?>">
                                <i class="bi bi-eye fs-5"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4 class="card-title fw-bold text-info mb-0">Bapak Kartono Sumarno</h4>
                            <small class="text-muted">2008 - 2014</small>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted d-block">Masa Jabatan</small>
                                <strong>6 Tahun (Periode ke-1)</strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Status</small>
                                <span class="badge bg-info">Kepala Desa Pertama</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="fw-bold text-secondary">
                                <i class="bi bi-bullseye me-2"></i>Visi
                            </h6>
                            <p class="card-text small">
                                "Membangun fondasi desa yang kuat dengan tata kelola pemerintahan
                                yang baik dan partisipasi aktif masyarakat."
                            </p>
                        </div>

                        <div class="mb-3">
                            <h6 class="fw-bold text-secondary">
                                <i class="bi bi-building me-2"></i>Pembangunan Utama
                            </h6>
                            <ul class="list-unstyled small">
                                <li class="mb-1"><i class="bi bi-hammer text-primary me-2"></i>Pembangunan Balai Desa
                                </li>
                                <li class="mb-1"><i class="bi bi-hammer text-primary me-2"></i>Jalan Desa Utama</li>
                                <li class="mb-1"><i class="bi bi-hammer text-primary me-2"></i>Sistem Irigasi Pertanian
                                </li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted d-block">Pendidikan</small>
                                <strong>SMA/Sederajat</strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Pengalaman</small>
                                <strong>25 Tahun</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-star-fill text-warning me-1"></i>
                                Kepala Desa Pertama
                            </small>
                            <div>
                                <a href="<?= base_url('Kades/Sejarah/KartonoSumarno') ?>"
                                    class="btn btn-outline-info btn-sm">
                                    <i class="bi bi-book me-1"></i>Sejarah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 shadow border-0 bg-light">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-graph-up me-2"></i>Statistik Kepemimpinan
                        </h5>
                    </div>

                    <div class="card-body">
                        <div class="row text-center mb-4">
                            <div class="col-4">
                                <div class="border-end">
                                    <h3 class="text-primary fw-bold">3</h3>
                                    <small class="text-muted">Total Kepala Desa</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="border-end">
                                    <h3 class="text-success fw-bold">17</h3>
                                    <small class="text-muted">Tahun Kepemimpinan</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <h3 class="text-warning fw-bold">5</h3>
                                <small class="text-muted">Prestasi Utama</small>
                            </div>
                        </div>

                        <h6 class="fw-bold text-secondary mb-3">
                            <i class="bi bi-clock-history me-2"></i>Timeline Kepemimpinan
                        </h6>

                        <div class="timeline">
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <div class="bg-success rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-person-check text-white"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Ahmad Suryadi, S.Sos</h6>
                                    <p class="mb-1 small text-muted">2020 - Sekarang (4 tahun)</p>
                                    <small class="text-success">Kepala Desa Aktif</small>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-person-dash text-white"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Suharto Wijaya</h6>
                                    <p class="mb-1 small text-muted">2014 - 2020 (6 tahun)</p>
                                    <small class="text-secondary">Masa Jabatan Berakhir</small>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <div class="bg-info rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-person-plus text-white"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Kartono Sumarno</h6>
                                    <p class="mb-1 small text-muted">2008 - 2014 (6 tahun)</p>
                                    <small class="text-info">Kepala Desa Pertama</small>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 p-3 bg-white rounded">
                            <h6 class="fw-bold text-secondary mb-2">
                                <i class="bi bi-info-circle me-2"></i>Informasi Tambahan
                            </h6>
                            <ul class="list-unstyled small mb-0">
                                <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Sistem pemilihan
                                    demokratis sejak 2008</li>
                                <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Masa jabatan 6 tahun per
                                    periode</li>
                                <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Dapat dipilih kembali
                                    maksimal 3 periode</li>
                                <li class="mb-0"><i class="bi bi-check2 text-success me-2"></i>Akuntabilitas dan
                                    transparansi terjaga</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow border-0">
                    <div class="card-header bg-gradient" style="background: linear-gradient(135deg, #007bff, #0056b3);">
                        <h4 class="text-white mb-0">
                            <i class="bi bi-trophy me-2"></i>Pencapaian Desa Cigugur Bersemi
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="text-center p-3 bg-light rounded">
                                    <i class="bi bi-award-fill text-warning fs-1 mb-2"></i>
                                    <h5 class="fw-bold">Desa Mandiri</h5>
                                    <p class="small text-muted mb-0">Status desa mandiri sejak 2019 dengan BUMDes yang
                                        berkembang pesat</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center p-3 bg-light rounded">
                                    <i class="bi bi-people-fill text-primary fs-1 mb-2"></i>
                                    <h5 class="fw-bold">Partisipasi Tinggi</h5>
                                    <p class="small text-muted mb-0">85% partisipasi masyarakat dalam program
                                        pembangunan desa</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center p-3 bg-light rounded">
                                    <i class="bi bi-graph-up-arrow text-success fs-1 mb-2"></i>
                                    <h5 class="fw-bold">Ekonomi Berkembang</h5>
                                    <p class="small text-muted mb-0">Pertumbuhan ekonomi desa 12% per tahun dalam 3
                                        tahun terakhir</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Foto Kepala Desa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" class="img-fluid" id="modalImage" alt="Foto Kepala Desa">
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-primary btn-floating" id="back-to-top"
        style="position: fixed; bottom: 20px; right: 20px; display: none;">
        <i class="bi bi-arrow-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>

    <!-- costum js -->
    <script src="<?= base_url('/others/js/profile_kades.js') ?>"></script>
</body>

</html>