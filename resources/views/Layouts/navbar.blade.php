
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <!-- Link untuk KelompokJagung -->
        <a class="navbar-brand {{ request()->routeIs('product.dashboard') ? 'active' : '' }}" 
           href="{{ route('product.dashboard') }}"><strong>.KelompokBuku</strong></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- Link untuk Home -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" 
                       href="/">
                        <strong>Beranda</strong>
                    </a>
                </li>
                <!-- Link untuk Product -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('product.index') ? 'active' : '' }}" 
                       href="{{ route('product.index') }}">
                        <strong>Produk</strong>
                    </a>
                </li>
         </ul>
        </div>
    </div>
</nav>
