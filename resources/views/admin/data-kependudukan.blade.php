@extends('layouts.page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="flex-column flex-md-row justify-content-start">
                    <h2 class="border-start border-danger border-4 py-2 px-2" style="">Data Kependudukan</h2>
                </div>
                <div class="flex-column flex-md-row justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah
                        Data Kependudukan</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Dusun</th>
                                        <th>Nama RW</th>
                                        <th>Nama RT</th>
                                        <th class="center">KK</th>
                                        <th class="center">L</th>
                                        <th class="center">P</th>
                                        <th class="center">L+P</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataPenduduk as $data)
                                        <tr>
                                            <td>{{ $data->nama_dusun }}</td>
                                            <td>{{ $data->nama_kepala_rw }}</td>
                                            <td>{{ $data->nama_kepala_rt }}</td>
                                            <td>{{ $data->jumlah_kk }}</td>
                                            <td>{{ $data->jumlah_pria }}</td>
                                            <td>{{ $data->jumlah_wanita }}</td>
                                            <td>{{ $data->jumlah_pria_wanita }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal{{ $data->id }}">Detail</button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $data->id }}">Edit</button>
                                                <form action="{{ route('admin.data-kependudukan.destroy', $data->id) }}"
                                                    method="POST" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr style="background-color: #E64946; font-weight:bold">
                                        <td colspan="2" align="left">TOTAL</td>
                                        <td colspan="1"></td>
                                        <td align="center">{{ $totalKK}}</td>
                                        <td align="center">{{ $totalLK }}</td>
                                        <td align="center">{{ $totalP }}</td>
                                        <td align="center">{{ $totalLP }}</td>
                                        <td colspan="1"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
    {{-- ===MODAL TAMBAH --}}
    <div id="tambahModal" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('admin.data-kependudukan.submit')}}" method="POST" id="myForm">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Tambah Data Kependudukan
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Nama Dusun</label>
                                <input class="form-control" type="text" placeholder="Nama Dusun" id="nama-dusun"
                                    name="nama_dusun">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Nama Kepala RW</label>
                                <input class="form-control" type="text" placeholder="Nama Kepala RW" id="nama-kepala-rw"
                                    name="nama_kepala_rw">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Nama Kepala RT</label>
                                <input class="form-control" type="text" placeholder="Nama Kepala RT" id="nama-kepala-rt"
                                    name="nama_kepala_rt">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah KK</label>
                                <input class="form-control" type="text" placeholder="Jumlah KK" id="jumlah-kk"
                                    name="jumlah_kk">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah Pria</label>
                                <input class="form-control" type="text" placeholder="Jumlah Pria" id="jumlah-pria"
                                    name="jumlah_pria">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah Wanita</label>
                                <input class="form-control" type="text" placeholder="Jumlah Wanita" id="jumlah-wanita"
                                    name="jumlah_wanita">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah Pria dan Wanita</label>
                                <input class="form-control" type="text" placeholder="Jumlah Pria dan Wanita"
                                    id="jumlah-pria-wanita" name="jumlah_pria_wanita">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    {{-- ===MODAL DETAIL=== --}}
    <!-- sample modal content -->
    @foreach ($dataPenduduk as $dataKependudukan)
        <div id="detailModal{{ $dataKependudukan->id }}" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Detail Data Kependudukan
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Nama Dusun</label>
                                <input class="form-control" type="text" placeholder="Nama Dusun"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="nama_dusun"
                                    value="{{ $dataKependudukan->nama_dusun }}" disabled>
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Nama Kepala RW</label>
                                <input class="form-control" type="text" placeholder="Nama Kepalaa RW"
                                    id="nama-kepala{{ $dataKependudukan->id }}" name="nama_kepala_rw"
                                    value="{{ $dataKependudukan->nama_kepala_rw }}" disabled>
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Nama Kepala RT</label>
                                <input class="form-control" type="text" placeholder="Nama Kepala RT"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="nama_kepala_rt"
                                    value="{{ $dataKependudukan->nama_kepala_rt }}" disabled>
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah KK</label>
                                <input class="form-control" type="text" placeholder="Jumlah KK"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="jumlah_kk"
                                    value="{{ $dataKependudukan->jumlah_kk }}" disabled>
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah Pria</label>
                                <input class="form-control" type="text" placeholder="Jumlah Pria"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="jumlah_pria"
                                    value="{{ $dataKependudukan->jumlah_pria }}" disabled>
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah Wanita</label>
                                <input class="form-control" type="text" placeholder="Jumlah Wanita"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="jumlah_wanita"
                                    value="{{ $dataKependudukan->jumlah_wanita }}" disabled>
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah Pria & Wanita</label>
                                <input class="form-control" type="text" placeholder="Jumlah Pria & Wanita"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="jumlah_pria_wanita"
                                    value="{{ $dataKependudukan->jumlah_pria_wanita }}" disabled>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach
    <!-- /.modal -->
    {{-- ===END MODAL DETAIL=== --}}

    {{-- ===MODAL EDIT=== --}}
    @foreach ($dataPenduduk as $dataKependudukan)
        <div id="editModal{{ $dataKependudukan->id }}" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('admin.data-kependudukan.edit', $dataKependudukan->id) }}" method="POST"
                        id="form{{ $dataKependudukan->id }}">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Edit Data Kependudukan
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Nama Dusun</label>
                                <input class="form-control" type="text" placeholder="Nama Dusun"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="nama_dusun"
                                    value="{{ $dataKependudukan->nama_dusun }}">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Nama Kepala RW</label>
                                <input class="form-control" type="text" placeholder="Nama Kepalaa RW"
                                    id="nama-kepala{{ $dataKependudukan->id }}" name="nama_kepala_rw"
                                    value="{{ $dataKependudukan->nama_kepala_rw }}">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Nama Kepala RT</label>
                                <input class="form-control" type="text" placeholder="Nama Kepala RT"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="nama_kepala_rt"
                                    value="{{ $dataKependudukan->nama_kepala_rt }}">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah KK</label>
                                <input class="form-control" type="text" placeholder="Jumlah KK"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="jumlah_kk"
                                    value="{{ $dataKependudukan->jumlah_kk }}">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah Pria</label>
                                <input class="form-control" type="text" placeholder="Jumlah Pria"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="jumlah_pria"
                                    value="{{ $dataKependudukan->jumlah_pria }}">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah Wanita</label>
                                <input class="form-control" type="text" placeholder="Jumlah Wanita"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="jumlah_wanita"
                                    value="{{ $dataKependudukan->jumlah_wanita }}">
                            </div>
                            <div class="col-md-12 pb-3">
                                <label for="example-text-input" class="form-label">Jumlah Pria & Wanita</label>
                                <input class="form-control" type="text" placeholder="Jumlah Pria & Wanita"
                                    id="nama-dusun{{ $dataKependudukan->id }}" name="jumlah_pria_wanita"
                                    value="{{ $dataKependudukan->jumlah_pria_wanita }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- ===END MODAL EDIT=== --}}
    @endforeach
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tambahModal').on('hidden.bs.modal', function() {
                $('#myForm')[0].reset();
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            @foreach ($dataPenduduk as $dataKependudukan)
                const modalElement{{ $dataKependudukan->id }} = document.getElementById(
                    'editModal{{ $dataKependudukan->id }}');
                const formElement{{ $dataKependudukan->id }} = document.getElementById(
                    'form{{ $dataKependudukan->id }}');
                const originalValues{{ $dataKependudukan->id }} = {
                    nama_dusun: '{{ $dataKependudukan->nama_dusun }}',
                    nama_kepala_rw: '{{ $dataKependudukan->nama_kepala_rw }}',
                    nama_kepala_rt: '{{ $dataKependudukan->nama_kepala_rt }}',
                    jumlah_kk: '{{ $dataKependudukan->jumlah_kk }}',
                    jumlah_pria: '{{ $dataKependudukan->jumlah_pria }}',
                    jumlah_wanita: '{{ $dataKependudukan->jumlah_wanita }}',
                    jumlah_pria_wanita: '{{ $dataKependudukan->jumlah_pria_wanita }}',
                    // Tambahkan field lainnya sesuai kebutuhan
                };

                modalElement{{ $dataKependudukan->id }}.addEventListener('hidden.bs.modal', function() {
                    formElement{{ $dataKependudukan->id }}.querySelector('[name="nama_dusun"]').value =
                        originalValues{{ $dataKependudukan->id }}.nama_dusun;
                    formElement{{ $dataKependudukan->id }}.querySelector('[name="nama_kepala_rw"]').value =
                        originalValues{{ $dataKependudukan->id }}.nama_kepala_rw;
                    formElement{{ $dataKependudukan->id }}.querySelector('[name="nama_kepala_rt"]').value =
                        originalValues{{ $dataKependudukan->id }}.nama_kepala_rt;
                    formElement{{ $dataKependudukan->id }}.querySelector('[name="jumlah_kk"]').value =
                        originalValues{{ $dataKependudukan->id }}.jumlah_kk;
                    formElement{{ $dataKependudukan->id }}.querySelector('[name="jumlah_pria"]').value =
                        originalValues{{ $dataKependudukan->id }}.jumlah_pria;
                    formElement{{ $dataKependudukan->id }}.querySelector('[name="jumlah_wanita"]').value =
                        originalValues{{ $dataKependudukan->id }}.jumlah_wanita;
                    formElement{{ $dataKependudukan->id }}.querySelector('[name="jumlah_pria_wanita"]')
                        .value =
                        originalValues{{ $dataKependudukan->id }}.jumlah_pria_wanita;
                });
            @endforeach
        });
    </script>
@endsection
