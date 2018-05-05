@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="fa fa-dashboard"> Dashboard</h3></div>

                <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="panel">
                <div class="panel-header"></div>

                <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-blue"><i class="fa fa-users"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Total Members</span>
                              <span class="info-box-number">{{ $totalMember }}</span>
                              <a href="{{url('/member')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-blue"><i class="fa fa-users"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Today's Members</span>
                              <span class="info-box-number">{{ $todayMember }}</span>
                              <a href="{{url('/member')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-blue"><i class="fa fa-users"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Last Month Members</span>
                              <span class="info-box-number">{{ $lastMonthMember }}</span>
                              <a href="{{url('/member')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                 </div>
                   <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-gift"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Total Vouchers</span>
                              <span class="info-box-number">{{ $totalVoucher }}</span>
                              <a href="{{url('/voucher')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-gift"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Today's Vouchers </span>
                              <span class="info-box-number">{{ $todayVouchers }}</span>
                              <a href="{{url('/voucher')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-gift"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Last Month Vouchers</span>
                              <span class="info-box-number">{{ $lastMonthVoucher }}</span>
                              <a href="{{url('/voucher')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                 </div>
                   <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-credit-card"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Total Collection</span>
                              <span class="info-box-number">{{ $totalCollection }}</span>
                              <a href="{{url('/payment-update')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-credit-card"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Today's Collection</span>
                              <span class="info-box-number">{{ $todayCollection }}</span>
                              <a href="{{url('/payment-update')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-credit-card"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Last Month Collection</span>
                              <span class="info-box-number">{{ $lastMonthCollection }}</span>
                              <a href="{{url('/payment-update')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                 </div>
                  <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-envelope"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Total Holiday's Request</span>
                              <span class="info-box-number">{{ $totalMember }}</span>
                              <a href="{{url('/member')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-envelope"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Today's Holiday Request</span>
                              <span class="info-box-number">{{ $totalMember }}</span>
                              <a href="{{url('/member')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-envelope "></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Last Month Holiday's Request</span>
                              <span class="info-box-number">{{ $totalMember }}</span>
                              <a href="{{url('/member')}}" style="color: black;">view all</a>
                        </div>
                      </div>
                     </div>
                 </div>
                     
                     
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                            
                                </div>
                                <div class="panel-body">

                                  <div id="container1"></div>
                                </div>
                                 
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
  
Highcharts.chart('container1', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Holidays Club'
    },
    subtitle: {
        text: 'All Details'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Monthly Member'
        },
        labels: {
            formatter: function () {
                return this.value + '°';
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
            }
        }
    },
    series: [{
        name: 'Member',
        marker: {
            symbol: 'square'
        },
        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
            y: 26.5,
            
        }, 23.3, 18.3, 13.9, 9.6]

    }, {
        name: 'Monthly Member',
        marker: {
            symbol: 'diamond'
        },
        data: [ <?php 
            foreach ($memberss as $value) {
              echo $value->total.',';
            }
             
            ?>]
    }]
});
</script>
@endsection


