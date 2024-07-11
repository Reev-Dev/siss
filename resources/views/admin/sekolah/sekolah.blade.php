<x-app-layout>
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
    <div class="col-12 max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
        <div class="row row-cards">
            <div class="col-12">
                <div class="mb-2">
                    <a href="{{ route('sekolah.create') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="col-12">
                <div class="card" style="height: 28rem;">
                    <div class="card-body card-body-scrollable card-body-scrollable-shadow p-0 rounded">
                        <style>
                            .table-responsive {
                                position: relative;
                                height: 27rem;
                                overflow-y: auto;
                            }

                            .table-responsive thead th {
                                position: sticky;
                                top: 0;
                                z-index: 1;
                                background: white;
                            }

                            .table-responsive tbody tr:nth-child(odd) {
                                background-color: #f9f9f9;
                            }
                        </style>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th class="w-4">No</th>
                                        <th>Tanggal Pembelian</th>
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
                                                <div class="hidden sm:flex sm:items-center sm:ms-6">
                                                    <x-dropdown align="right" width="48">
                                                        <x-slot name="trigger">
                                                            <button
                                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                Actions
                                                            </button>
                                                        </x-slot>

                                                        <x-slot name="content">
                                                            <x-dropdown-link :href="route('sekolah.edit', $item->id)" wire:navigate>
                                                                {{ __('Edit') }}
                                                            </x-dropdown-link>
                                                            <x-dropdown-link :action="route('sekolah.delete', $item->id)" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    onclick="return confirm('Apakah anda yain ingin menghapus sekolah ini?')"
                                                                    class="dropdown-item">Delete</button>
                                                            </x-dropdown-link>
                                                        </x-slot>
                                                    </x-dropdown>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="11" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
