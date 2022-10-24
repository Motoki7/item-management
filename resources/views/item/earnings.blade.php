@extends('adminlte::page')

@section('title', '売上画面')

@section('content_header')
<h1>売上確認画面</h1>
@stop

@section('content')
@if ($errors->any())
<div class="alert alert-warning alert-dismissible">
    {{-- エラーの表示 --}}
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- 売上画面 --}}
<div class="earnings-content">
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
    <canvas id="myChart" width="200" height="90"></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
                datasets: [{
                    label: '売上グラフ',
                    data: [25, 19, 3, 5, 2, 3, 15, 6, 17, 8, 6, 26],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


    <div class="card card-primary">
        <form action="" method="POST">
            @csrf
            <div class="card-body">
                    <label for="name">1月</label>
                    <input type="number" class="form-control" id="month1" name="month1" placeholder="売上" value="0">
                    <label for="name">2月</label>
                    <input type="number" class="form-control" id="month2" name="month2" placeholder="売上" value="0">
                    <label for="name">3月</label>
                    <input type="number" class="form-control" id="month3" name="month3" placeholder="売上" value="0">
                    <label for="name">4月</label>
                    <input type="number" class="form-control" id="month4" name="month4" placeholder="売上" value="0">
                    <label for="name">5月</label>
                    <input type="number" class="form-control" id="month5" name="month5" placeholder="売上" value="0">
                    <label for="name">6月</label>
                    <input type="number" class="form-control" id="month6" name="month6" placeholder="売上" value="0">
                    <label for="name">7月</label>
                    <input type="number" class="form-control" id="month7" name="month7" placeholder="売上" value="0">
                    <label for="name">8月</label>
                    <input type="number" class="form-control" id="month8" name="month8" placeholder="売上" value="0">
                    <label for="name">9月</label>
                    <input type="number" class="form-control" id="month9" name="month9" placeholder="売上" value="0">
                    <label for="name">10月</label>
                    <input type="number" class="form-control" id="month10" name="month10" placeholder="売上" value="0">
                    <label for="name">11月</label>
                    <input type="number" class="form-control" id="month11" name="month11" placeholder="売上" value="0">

                <div class="form-group">
                    <label for="name">12月</label>
                    <input type="number" class="form-control" id="month12" name="month12" placeholder="売上" value="0">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </form>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop
