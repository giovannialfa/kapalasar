@extends ('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex">
        <img src="{{ asset('image/homeDashboard.png') }}"  alt="" class="mt-5">
    </div>
</div>
<div class="container mt-5">
    <div>
        <p>Dashboard</p>
    </div>
    <div class="d-flex justify-content-between mt-3" style="background: #FFFFFF;box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);border-radius: 5px;">
                <div class="mr-3" style="flex: 8;border-radius: 1em;">
                    <div class="d-flex flex-column white-bg p-1" style="box-shadow: 0px 2px 15px rgba(221, 221, 221, 0.15);">
                        <div class="title-content mb-3">Riwayat Transaksi</div>
                        <!-- <input class="form-control" id="input-search" type="text" placeholder="Cari berdasarkan id, nama, dll"> -->
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
                        @include('../merchant.detailTransaksi')
                        <div id="container"></div>
                    </div>
                    <figure class="highcharts-figure">
                        <p class="highcharts-description">
                           
                        </p>
                    </figure>
                    </div>
                </div>
</div>
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
@endsection