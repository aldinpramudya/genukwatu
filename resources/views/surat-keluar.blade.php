@extends('layouts.page')
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="border-start border-danger border-4 py-2" style="">Surat Keluar</h2>
            <hr>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Judul Surat</th>
                                        <th>Jenis Surat</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suratKeluar as $surat)
                                        <tr>
                                            <td>{{ $surat->judul_surat }}</td>
                                            <td>{{ $surat->jenisSurat->nama }}</td>
                                            <td>{{ $surat->tanggal_masuk }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
@endsection
