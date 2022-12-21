@extends('layout')

@section('content')
<body>
    <br>
    <h1 style="text-align: center;">Users Information</h1>
    <br>
    <div class="container">
        <div class="table-responsive">
            <table id="users" class="table table-stripped" style="text-align: center;">
                <thead>
                    <th>Identification Number</th>
                    <th>Created At</th>
                    <th>Transactions</th>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->identification_number}}</td>
                        <td>{{$item->created_at}}</td>
                        <td><a href="{{route('getTransactionsUser',$item->id)}}" alt="transactions"><button class="btn btn-sm btn-primary" title="Transactions by user"><i class="bi bi-card-checklist"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
</body>
</html>
@endsection

