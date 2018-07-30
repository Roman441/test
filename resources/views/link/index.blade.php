@extends ('layout')

@section ('content')
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>URL</th>
                <th>User</th>
                <th>Count</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($links as $link)
                <tr>
                    <td> {{$link->link}} </td>
                    <td> {{$link->current_user}} </td>
                    <td> {{$link->count}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
@endsection
