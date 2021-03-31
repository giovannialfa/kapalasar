@extends ('layouts.app')
@section('content')
@include('../component.header')
<div class="c-body mt-2">
                <div class="container-fluid">
                    <div class="fade-in">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="title-content mb-3">Riwayat Transaksi</div>
                                        <!-- <div class="row">
                                        <div class="col">
                                            Pencarian
                                            <form class="form-inline md-form form-sm mt-0 " style="width: 30vh; height:5vh" >        
                                                <i class="fas fa-search" aria-hidden="true"></i>
                                                <input class="form-control form-control-sm ml-3 " id="input-search" type="text" placeholder="Cari berdasarkan id, nama, dll" aria-label="Search" >
                                            </form>   
                                        </div>
                                        <div class="col ">
                                            Filter Waktu
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" style="width: 30vh; height:5vh">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            Filter Berdasarkan
                                            <select name="" id="filterDashboard" style="width: 30vh; height:5vh">
                                                <option value="">asdas</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            Urut Berdasarkan
                                            <select name="" id="sortBy" style="width: 30vh; height:5vh">
                                                <option value="">aaa</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <table class="table table-responsive-sm table-striped mydatatable ml-4 mr-4 ">
                                <div class="card-body">
                                    <thead>
                                        <tr>
                                            <th>Id Transaksi</th>
                                            <th>Tanggal</th>
                                            <th>Nama Pembeli</th>
                                            <th>Alamat Pembeli</th>
                                            <th>Merchant</th>
                                            <th>Total Harga</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Yiorgos Avraamu</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>Jl. Raya Bandung Sumedang KM.21, Hegarmanah, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</td>
                                            <td>Member</td>
                                            <td>Member</td>
                                            <td>
                                                <button class="button badge badge-success" data-toggle="modal" data-target="#detailModal"
                                                style="background: #A6CB26;"
                                                >Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gio</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>Jl. Raya Bandung Sumedang KM.21, Hegarmanah, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</td>
                                            <td>Member</td>
                                            <td>Member</td>
                                            <td>
                                                <button class="button badge badge-success" data-toggle="modal" data-target="#detailModal"
                                                style="background: #A6CB26;"
                                                >Detail</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        @include('../admin.detailTransaksi')<div id="container"></div>
                    <figure class="highcharts-figure">
                        <p class="highcharts-description">
                           
                        </p>
                    </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="d-flex justify-content-between ml-4 mt-3">
    <div class="mr-3" style="flex: 8;border-radius: 1em;">
                    <div class="d-flex flex-column white-bg p-3" style="box-shadow: 0px 2px 15px rgba(221, 221, 221, 0.15);">
                        <div class="title-content mb-3">Riwayat Transaksi</div>
                        <div class="row">
                            <div class="col">
                                Pencarian
                                <form class="form-inline md-form form-sm mt-0 " style="width: 30vh; height:5vh" >        
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                    <input class="form-control form-control-sm ml-3 " id="input-search" type="text" placeholder="Cari berdasarkan id, nama, dll" aria-label="Search" >
                                </form>   
                            </div>
                            <div class="col ">
                                Filter Waktu
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" style="width: 30vh; height:5vh">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                Filter Berdasarkan
                                    <select name="" id="filterDashboard" style="width: 30vh; height:5vh">
                                        <option value="">asdas</option>
                                    </select>
                            </div>
                            <div class="col">
                                Urut Berdasarkan
                                <select name="" id="sortBy" style="width: 30vh; height:5vh">
                                    <option value="">aaa</option>
                            </select>
                            </div>
                        </div>
                        <table class="table table-hover table-striped mt-2" >
                            <thead class="titletable">
                                <tr style="background: #A6CB26;">
                                    <th scope="col" class="headTable">Id Transaksi</th>
                                    <th scope="col" class="headTable">Tanggal</th>
                                    <th scope="col" class="headTable">Nama Pembeli</th>
                                    <th scope="col" class="headTable">Alamat Pembeli</th>
                                    <th scope="col" class="headTable">Merchant</th>
                                    <th scope="col" class="headTable">Total Harga</th>
                                    <th scope="col" class="headTable"></th>
                                </tr>
                            </thead>
                            <tbody id="table-content">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Michael</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="button" data-toggle="modal" data-target="#detailModal">Detail</button>
                                    </td>
                                </tr>
                            </tbody>    
                        </table>
                        @include('../admin.detailTransaksi')
                        <div id="container"></div>
                    </div>
                    <figure class="highcharts-figure">
                        <p class="highcharts-description">
                           
                        </p>
                    </figure>
                </div>
            </div> -->
<script>
    const chart = Highcharts.chart('container', {
    title: {
        text: 'Grafik Transaksi'
    },
    yAxis:{
        title:{
            text: 'Penjualan'
        }
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        title:{
            text: 'bulan'
        }
    },
    series: [{
        type: 'column',
        colorByPoint: true,
        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
        showInLegend: false
    }]
});


</script>
<script>
$(document).ready( function () {
    $('.mydatatable').DataTable();
} );
</script>

@endsection