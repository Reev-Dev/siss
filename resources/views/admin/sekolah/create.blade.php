<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sarpras Sekolah') }}
        </h2>
    </x-slot> --}}
    <div class="pb-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="mb-4">
                    <a href="/sekolah" class="btn btn-secondary">Back</a>
                </div>
                <div class="col-lg-12">
                    <div class="row row-cards">
                        <div class="col-12">
                            <form action="{{ route('sekolah.perform') }}" method="post" class="card">
                                @csrf
                                <div class="card-body rounded">
                                    <h3 class="card-title">Pembelian Sekolah</h3>
                                    <div class="row row-cards">
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Pembelian</label>
                                                <input type="date" name="tahun_pembelian" class="form-control"
                                                    placeholder="Pilih Tanggal" autofocus autocomplete="off"
                                                    value="{{ old('tahun_pembelian') }}">
                                                @error('tahun_pembelian')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Kode Barang</label>
                                                <input type="text" name="kode" class="form-control" autofocus
                                                    autocomplete="off" placeholder="Kode Barang"
                                                    value="{{ old('kode') }}">
                                                @error('kode')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nama Barang</label>
                                                <input type="text" name="nama_barang" class="form-control"
                                                    placeholder="Nama Barang" autofocus autocomplete="off"
                                                    value="{{ old('nama_barang') }}">
                                                @error('nama_barang')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Harga Satuan</label>
                                                <input type="text" id="harga" name="harga_satuan"
                                                    class="form-control" placeholder="Rp. ..." autofocus
                                                    autocomplete="off" value="{{ old('harga_satuan') }}">
                                                @error('harga_satuan')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Jumlah</label>
                                                <input type="number" id="jumlah" name="jumlah" class="form-control"
                                                    placeholder="Jumlah" autofocus autocomplete="off"
                                                    value="{{ old('jumlah') }}">
                                                @error('jumlah')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label class="form-label">Total Harga</label>
                                                <input type="text" id="total" name="total_harga"
                                                    class="form-control" autofocus autocomplete="off"
                                                    placeholder="Total Harga" value="{{ old('total_harga') }}"
                                                    readonly>
                                                @error('total_harga')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Pembeli</label>
                                                <input type="text" name="pembeli" class="form-control" autofocus
                                                    autocomplete="off" placeholder="Pembeli"
                                                    value="{{ old('pembeli') }}">
                                                @error('pembeli')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                                
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Toko</label>
                                                <input type="text" name="toko" class="form-control" autofocus
                                                    autocomplete="off" placeholder="Toko" value="{{ old('toko') }}">
                                                @error('toko')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 mb-0">
                                                <label class="form-label">Keterangan</label>
                                                <textarea rows="5" name="keterangan" class="form-control" placeholder="Keterangan" autofocus
                                                    autocomplete="off"></textarea>
                                                @error('keterangan')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </div>

                                <script>
                                    const hargaInput = document.getElementById('harga');
                                    const jumlahInput = document.getElementById('jumlah');
                                    const totalInput = document.getElementById('total');

                                    function formatRupiah(angka, prefix) {
                                        var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                            split = number_string.split(','),
                                            sisa = split[0].length % 3,
                                            rupiah = split[0].substr(0, sisa),
                                            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                                        if (ribuan) {
                                            separator = sisa ? '.' : '';
                                            rupiah += separator + ribuan.join('.');
                                        }

                                        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                                    }

                                    function calculateTotal() {
                                        const harga = parseFloat(hargaInput.value.replace(/[^,\d]/g, '')) || 0;
                                        const jumlah = parseFloat(jumlahInput.value) || 0;
                                        const total = harga * jumlah;
                                        totalInput.value = formatRupiah(total.toString(), 'Rp. ');
                                    }

                                    hargaInput.addEventListener('input', function(e) {
                                        hargaInput.value = formatRupiah(this.value, 'Rp. ');
                                        calculateTotal();
                                    });

                                    jumlahInput.addEventListener('input', calculateTotal);
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
