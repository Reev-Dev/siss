<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sarpras Sekolah') }}
        </h2>
    </x-slot> --}}
    <div class="col-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row row-cards">
            <div class="col-sm-12 col-lg-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-primary text-white avatar avatar-2xl"
                                    style="--tblr-avatar-size: 9rem; --tblr-avatar-icon-size: 6rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-buildings">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 21v-15c0 -1 1 -2 2 -2h5c1 0 2 1 2 2v15" />
                                        <path d="M16 8h2c1 0 2 1 2 2v11" />
                                        <path d="M3 21h18" />
                                        <path d="M10 12v0" />
                                        <path d="M10 16v0" />
                                        <path d="M10 8v0" />
                                        <path d="M7 12v0" />
                                        <path d="M7 16v0" />
                                        <path d="M7 8v0" />
                                        <path d="M17 12v0" />
                                        <path d="M17 16v0" />
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="col-6 col-sm-4 col-xl pb-1">
                                    <a href="#" class="btn btn-outline-success w-100">
                                        Pembelian
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-xl py-2">
                                    <a href="#" class="btn btn-outline-warning w-100">
                                        Baik
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-xl pt-1">
                                    <a href="#" class="btn btn-outline-danger w-100">
                                        Rusak
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-green text-white avatar avatar-2xl"
                                    style="--tblr-avatar-size: 9rem; --tblr-avatar-icon-size: 6rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-building-community">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                                        <path d="M13 7l0 .01" />
                                        <path d="M17 7l0 .01" />
                                        <path d="M17 11l0 .01" />
                                        <path d="M17 15l0 .01" />
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="col-6 col-sm-4 col-xl pb-1">
                                    <a href="#" class="btn btn-outline-success w-100">
                                        Pembelian
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-xl py-2">
                                    <a href="#" class="btn btn-outline-warning w-100">
                                        Baik
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-xl pt-1">
                                    <a href="#" class="btn btn-outline-danger w-100">
                                        Rusak
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('sekolah.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card card-body card-body-scrollable card-body-scrollable-shadow">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th class="w-4">Id</th>
                                <th>Tahun Pembelian</th>
                                <th>Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Pembeli</th>
                                <th>Toko</th>
                                <th>Keterangan</th>
                                <th class="w-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @forelse ($spurchased as $item)
                                <tr>
                                    <td>
                                        {{ $i++ }}
                                    </td>
                                    <td>
                                        {{ $item->tahun_pembelian }}
                                    </td>
                                    <td>
                                        {{ $item->nama_barang }}
                                    </td>
                                    <td>
                                        {{ $item->kode }}
                                    </td>
                                    <td>
                                        {{ $item->harga_satuan }}
                                    </td>
                                    <td>
                                        {{ $item->jumlah }}
                                    </td>
                                    <td>
                                        {{ $item->total_harga }}
                                    </td>
                                    <td>
                                        {{ $item->pembeli }}
                                    </td>
                                    <td>
                                        {{ $item->toko }}
                                    </td>
                                    <td>
                                        {{ $item->keterangan }}
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="{{ route('sekolah.edit', $item->id) }}"
                                                        class="dropdown-item">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('sekolah.delete', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            onclick="return confirm('Apakah anda yain ingin menghapus sekolah ini?')"
                                                            class="dropdown-item">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
