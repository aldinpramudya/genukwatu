@extends('layouts.page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="flex-column flex-md-row justify-content-start">
                    <h2 class="border-start border-danger border-4 py-2 px-2" style="">Data Kependudukan</h2>
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
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
@endsection
