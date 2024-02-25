@include('layout.head')
<div class="teacher">
    
    <div class="name">{{($name)}}</div>
    <div class="payslip">
        <a href="{{$path}}"><img src="css/icon/icon100.png"><br>{{$month}}</a>
    </div>
    <div class="teacher_exit">
        <a href="{{route('home')}}">Выход</a>
    </div>
</div>
@include('layout.footer')
</html>