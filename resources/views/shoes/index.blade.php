
@extends('layouts.app')

@section('title', 'ADI SPORT SHOES STATION | Sepatu Olahraga')

@push('styles')
<style>
    html {
        scroll-behavior: smooth;
        scroll-padding-top: 100px;
    }

    #katalog, #tentang, #tentang-kami, #kontak {
        scroll-margin-top: 100px;
    }

    .sport-hero {
        background: linear-gradient(110deg, #f8f8f8 0%, #fff 55%, #f0f0f0 100%);
        overflow: hidden;
        position: relative;
    }

    .hero-eyebrow {
        color: #d71920;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    .hero-title {
        font-size: clamp(30px, 4vw, 52px);
        font-weight: 900;
        line-height: 1.08;
        letter-spacing: -1.5px;
        text-transform: uppercase;
    }

    .hero-title span {
        color: #d71920;
    }

    .hero-description {
        max-width: 460px;
        color: #626262;
        font-size: 16px;
        line-height: 1.7;
    }

    .hero-visual {
        min-height: 310px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .hero-visual::before {
        content: "";
        position: absolute;
        width: 65%;
        height: 85%;
        background: #d71920;
        transform: skew(-25deg);
        opacity: .95;
    }

    .hero-shoe {
        width: 100%;
        max-height: 340px;
        object-fit: contain;
        position: relative;
        z-index: 1;
        filter: drop-shadow(0 18px 12px rgba(0,0,0,.16));
    }

    .hero-placeholder {
        position: relative;
        z-index: 1;
        width: 100%;
        min-height: 260px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
    }

    .hero-placeholder .shoe-icon {
        font-size: 100px;
        line-height: 1.2;
    }

    .category-chip {
        display: inline-block;
        border: 0;
        border-radius: 30px;
        padding: 9px 19px;
        background: #f2f2f2;
        color: #222;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        white-space: nowrap;
        cursor: pointer;
        transition: .2s;
    }

    .category-chip:hover,
    .category-chip.active {
        background: #d71920;
        color: #fff;
    }

    .catalog-search, .catalog-sort {
        min-height: 43px;
        border: 1px solid #dedede;
        border-radius: 9px;
        font-size: 13px;
    }

    .catalog-search:focus, .catalog-sort:focus {
        border-color: #d71920;
        box-shadow: 0 0 0 .15rem rgba(215,25,32,.1);
    }

    .product-card {
        height: 100%;
        border: 1px solid #e9e9e9;
        border-radius: 13px;
        overflow: hidden;
        background: #fff;
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 28px rgba(0,0,0,.08);
    }

    .product-photo-wrap {
        height: 205px;
        margin: 8px 8px 0;
        border-radius: 9px;
        background: #f8f8f8;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .product-photo {
        width: 100%;
        height: 100%;
        padding: 10px;
        object-fit: contain;
        transition: transform .25s ease;
    }

    .product-card:hover .product-photo {
        transform: scale(1.05);
    }

    .brand-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #d71920;
        color: #fff;
        padding: 4px 11px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 700;
        z-index: 2;
    }

    .product-body {
        padding: 14px 15px 16px;
    }

    .product-brand {
        color: #777;
        font-size: 11px;
        text-transform: uppercase;
        margin-bottom: 3px;
    }

    .product-name {
        color: #111;
        font-size: 16px;
        font-weight: 800;
        line-height: 1.35;
        margin-bottom: 7px;
    }

    .product-category {
        display: inline-block;
        background: #f4f4f4;
        color: #666;
        font-size: 11px;
        border-radius: 20px;
        padding: 4px 9px;
    }

    .product-price {
        color: #d71920;
        font-size: 17px;
        font-weight: 800;
        margin: 12px 0;
    }

    .btn-product {
        display: block;
        width: 100%;
        background: #d71920;
        color: #fff;
        text-align: center;
        border: 1px solid #d71920;
        border-radius: 7px;
        padding: 10px 12px;
        font-size: 12px;
        font-weight: 700;
        text-decoration: none;
        transition: .2s;
    }

    .btn-product:hover {
        background: #b9151b;
        border-color: #b9151b;
        color: #fff;
    }

    .catalog-heading {
        font-size: 25px;
        font-weight: 900;
        letter-spacing: -.5px;
    }

    .heading-marker {
        border-left: 4px solid #d71920;
        padding-left: 14px;
    }

    .benefit-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 18px 10px;
    }

    .benefit-icon {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #f8e7e8;
        color: #d71920;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
        flex-shrink: 0;
    }

    .benefit-title {
        font-size: 13px;
        font-weight: 800;
        margin-bottom: 3px;
    }

    .benefit-description {
        color: #777;
        font-size: 11px;
        margin-bottom: 0;
    }

    .empty-products {
        border: 1px dashed #ddd;
        border-radius: 12px;
        padding: 40px 20px;
        text-align: center;
        color: #777;
    }

    .about-panel {
        background: #f7f7f7;
        border-radius: 18px;
        padding: 35px;
        height: 100%;
    }

    .contact-panel {
        background: #111;
        color: #fff;
        border-radius: 18px;
        padding: 35px;
    }

    @media (max-width: 767px) {
        .sport-hero {
            text-align: center;
        }

        .hero-description {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-visual {
            min-height: 230px;
        }

        .hero-shoe {
            max-height: 240px;
        }

        .product-photo-wrap {
            height: 155px;
        }

        .product-body {
            padding: 12px;
        }

        .product-name {
            font-size: 14px;
        }

        .product-price {
            font-size: 15px;
        }

        .about-panel, .contact-panel {
            padding: 24px;
        }
    }
</style>
@endpush

@section('content')

{{-- BANNER UTAMA --}}
<section class="sport-hero" id="beranda">
    <div class="container py-4 py-lg-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <p class="hero-eyebrow mb-3">ADI SPORT SHOES STATION</p>

                <h1 class="hero-title mb-3">
                    Sepatu olahraga untuk
                    <span>setiap langkahmu.</span>
                </h1>

                <p class="hero-description mb-4">
                    Dari latihan ringan hingga aktivitas sehari-hari,
                    temukan sepatu yang cocok untuk mendukung setiap langkahmu.
                </p>

                <a href="#katalog" class="btn-sport">
                    Jelajahi Koleksi <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="col-lg-6 offset-lg-1">
                <div class="hero-visual">
                    @if(isset($shoes) && $shoes->count() > 0 && $shoes->first()->image)
                        <img
                            src="{{ asset('assets/images/' . $shoes->first()->image) }}"
                            alt="Koleksi sepatu ADI SPORT"
                            class="hero-shoe"
                        >
                    @else
                        <div class="hero-placeholder">
                            <div class="shoe-icon">👟</div>
                            <h2 class="fw-bold mb-0">MOVE YOUR WAY</h2>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- KATALOG PRODUK --}}
<section class="container py-5" id="katalog">
    <div class="row align-items-center g-3 mb-4">
        <div class="col-lg-4">
            <h2 class="catalog-heading heading-marker mb-0">Kategori Sepatu</h2>
        </div>

        <div class="col-lg-8">
            <div class="row g-2">
                <div class="col-md-8">
                    <input
                        type="search"
                        id="shoeSearch"
                        class="form-control catalog-search"
                        placeholder="Cari nama sepatu atau merek..."
                        aria-label="Cari sepatu"
                    >
                </div>

                <div class="col-md-4">
                    <select id="shoeSort" class="form-select catalog-sort" aria-label="Urutkan produk">
                        <option value="default">Urutkan produk</option>
                        <option value="name">Nama A–Z</option>
                        <option value="low">Harga terendah</option>
                        <option value="high">Harga tertinggi</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- FILTER KATEGORI --}}
    <div class="d-flex flex-wrap gap-2 mb-4" id="categoryFilters">
        <button type="button" class="category-chip active" data-category="all">
            Semua
        </button>

        @php
            $categories = $shoes->pluck('sport_type')->filter()->unique()->values();
        @endphp

        @foreach($categories as $category)
            <button
                type="button"
                class="category-chip"
                data-category="{{ strtolower($category) }}"
            >
                {{ $category }}
            </button>
        @endforeach
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="h4 fw-bold mb-1">Koleksi Sepatu</h2>
            <p class="text-secondary small mb-0">
                Temukan sepatu yang sesuai dengan gaya dan aktivitasmu.
            </p>
        </div>

        <span class="small text-secondary" id="productCount">
            {{ $shoes->count() }} produk
        </span>
    </div>

    {{-- GRID PRODUK --}}
    <div class="row g-3 g-lg-4" id="shoeGrid">
        @forelse($shoes as $shoe)
            <div
                class="col-6 col-md-4 col-lg-3 col-xl-2 shoe-item"
                data-name="{{ strtolower($shoe->name) }}"
                data-brand="{{ strtolower($shoe->brand) }}"
                data-category="{{ strtolower($shoe->sport_type) }}"
                data-price="{{ $shoe->price }}"
                data-id="{{ $shoe->id }}"
            >
                <article class="product-card">
                    <div class="product-photo-wrap">
                        <span class="brand-badge">{{ $shoe->brand }}</span>

                        <img
                            src="{{ asset('assets/images/' . $shoe->image) }}"
                            alt="{{ $shoe->name }}"
                            class="product-photo"
                            loading="lazy"
                            onerror="this.style.opacity='0.15';"
                        >
                    </div>

                    <div class="product-body">
                        <p class="product-brand">{{ $shoe->brand }}</p>
                        <h3 class="product-name">{{ $shoe->name }}</h3>

                        <span class="product-category">{{ $shoe->sport_type }}</span>

                        <p class="small text-secondary mt-2 mb-0">
                            Ukuran {{ $shoe->size_range }}
                        </p>

                        <p class="product-price">
                            Rp {{ number_format($shoe->price, 0, ',', '.') }}
                        </p>

                        <a
                            href="{{ route('shoes.show', $shoe->id) }}"
                            class="btn-product"
                        >
                            Lihat Detail <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </article>
            </div>
        @empty
            <div class="col-12">
                <div class="empty-products">
                    <h3 class="h5 fw-bold">Belum ada produk sepatu</h3>
                    <p class="mb-0">Silakan tambahkan data produk terlebih dahulu.</p>
                </div>
            </div>
        @endforelse

        <div class="col-12 d-none" id="noSearchResults">
            <div class="empty-products">
                <h3 class="h5 fw-bold">Produk tidak ditemukan</h3>
                <p class="mb-0">Coba kata kunci atau kategori lainnya.</p>
            </div>
        </div>
    </div>
</section>

{{-- KEUNGGULAN TOKO --}}
<section class="container mb-4" id="tentang">
    <div class="row g-3 border-top border-bottom">
        <div class="col-6 col-lg-3">
            <div class="benefit-item">
                <div class="benefit-icon">🚚</div>
                <div>
                    <p class="benefit-title">Pengiriman Cepat</p>
                    <p class="benefit-description">Praktis dan mudah</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="benefit-item">
                <div class="benefit-icon">✓</div>
                <div>
                    <p class="benefit-title">Pilihan Berkualitas</p>
                    <p class="benefit-description">Koleksi sepatu pilihan</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="benefit-item">
                <div class="benefit-icon">☎</div>
                <div>
                    <p class="benefit-title">Layanan Pelanggan</p>
                    <p class="benefit-description">Siap membantu kebutuhanmu</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="benefit-item">
                <div class="benefit-icon">♡</div>
                <div>
                    <p class="benefit-title">Nyaman Beraktivitas</p>
                    <p class="benefit-description">Temukan gaya favoritmu</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TENTANG KAMI --}}
<section class="container py-5" id="tentang-kami">
    <div class="row align-items-center g-4">
        <div class="col-lg-6">
            <p class="hero-eyebrow mb-2">TENTANG KAMI</p>
            <h2 class="catalog-heading mb-3">
                Selamat Datang di ADI SPORT SHOES STATION
            </h2>

            <p class="text-secondary" style="line-height:1.8;">
                ADI SPORT SHOES STATION merupakan katalog sepatu olahraga
                yang menyediakan beragam pilihan sepatu untuk menunjang
                aktivitas olahraga dan gaya sehari-hari.
            </p>

            <p class="text-secondary mb-0" style="line-height:1.8;">
                Kami menghadirkan berbagai pilihan merek, model, dan kategori
                sepatu agar pengunjung dapat menemukan produk yang sesuai
                dengan kebutuhan dan gaya masing-masing.
            </p>
        </div>

        <div class="col-lg-6">
            <div class="about-panel text-center d-flex flex-column justify-content-center">
                <div style="font-size:65px;">👟</div>
                <h3 class="fw-bold mt-2">MOVE YOUR WAY</h3>
                <p class="text-secondary mb-0">
                    Sporty style. Comfort every step.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- KONTAK --}}
<section class="container pb-5" id="kontak">
    <div class="contact-panel">
        <div class="row align-items-center g-3">
            <div class="col-lg-8">
                <p class="mb-2" style="color:#ff555b;font-size:12px;font-weight:800;letter-spacing:2px;">
                    HUBUNGI KAMI
                </p>

                <h2 class="fw-bold mb-2">Ada yang ingin kamu ketahui?</h2>

                <p class="mb-0" style="color:#ccc;line-height:1.7;">
                    Jelajahi koleksi ADI SPORT SHOES STATION dan temukan
                    sepatu yang sesuai dengan aktivitasmu.
                </p>
            </div>

            <div class="col-lg-4 text-lg-end">
                <a href="#katalog" class="btn-sport">
                    Lihat Koleksi <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('shoeSearch');
    const sortSelect = document.getElementById('shoeSort');
    const filterButtons = document.querySelectorAll('.category-chip');
    const grid = document.getElementById('shoeGrid');
    const countLabel = document.getElementById('productCount');
    const noResults = document.getElementById('noSearchResults');

    let activeCategory = 'all';

    function updateProducts() {
        const keyword = searchInput.value.trim().toLowerCase();
        const items = Array.from(grid.querySelectorAll('.shoe-item'));

        items.sort(function (a, b) {
            const sort = sortSelect.value;

            if (sort === 'name') {
                return a.dataset.name.localeCompare(b.dataset.name);
            }

            if (sort === 'low') {
                return Number(a.dataset.price) - Number(b.dataset.price);
            }

            if (sort === 'high') {
                return Number(b.dataset.price) - Number(a.dataset.price);
            }

            return Number(a.dataset.id) - Number(b.dataset.id);
        });

        items.forEach(function (item) {
            grid.insertBefore(item, noResults);

            const name = item.dataset.name || '';
            const brand = item.dataset.brand || '';
            const category = item.dataset.category || '';

            const matchesSearch =
                name.includes(keyword) || brand.includes(keyword);

            const matchesCategory =
                activeCategory === 'all' || category === activeCategory;

            item.classList.toggle(
                'd-none',
                !(matchesSearch && matchesCategory)
            );
        });

        const visibleCount = items.filter(function (item) {
            return !item.classList.contains('d-none');
        }).length;

        countLabel.textContent = visibleCount + ' produk';
        noResults.classList.toggle('d-none', visibleCount !== 0);
    }

    searchInput.addEventListener('input', updateProducts);
    sortSelect.addEventListener('change', updateProducts);

    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            activeCategory = button.dataset.category;

            filterButtons.forEach(function (item) {
                item.classList.toggle('active', item === button);
            });

            updateProducts();
        });
    });

    updateProducts();
});
</script>
@endpush
