
<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">
        @php
            // Mendapatkan bagian dari URL yang mengandung nama halaman
            $path = request()->path();
            $contactName = ucfirst(basename($path));
        @endphp
        {{ $contactName }}
    </h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="">Pages</a></li>
        <li class="breadcrumb-item active text-white">{{ $contactName }}</li>
    </ol>
</div>
<!-- Single Page Header End -->