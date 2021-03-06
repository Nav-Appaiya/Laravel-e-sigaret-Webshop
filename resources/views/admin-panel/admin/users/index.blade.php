@extends('admin-panel.layouts.admin')

@section('title', 'categories')
@section('breadcrumb', Breadcrumbs::render('dashboard.user'))

@section('content')

    <div class="row">
        <div class="col-lg-9">
            <div class="table-responsive">
            <table class="table table-condensed table-bordered table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nr</th>
                        <th>username</th>
                        <th>email</th>
                        <th>role</th>
                        <th>joined at</th>
                        <th>updated at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="table-row"data-href="{{URL::route('admin_user_edit', $user->id)}}">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->is_admin }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>{{ $user->created_at }}</td>
                            {{--<td>{{ $user->order }}</td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-3 pull-right">
            <ul class="list-group">
                {{--<li class="list-group-item"><a href="{{route('admin_category_create')}}">new</a></li>--}}
            </ul>
        </div>

    </div>

@endsection

@push('scripts')
    <script>
        /*
         * Play with this code and it'll update in the panel opposite.
         *
         * Why not try some of the options above?
         */
        {{--Morris.Donut({--}}
            {{--element: 'donut-status',--}}
            {{--data: {!! json_encode(\Illuminate\Support\Facades\DB::table('users')--}}
                    {{--->groupBy('status')--}}
                    {{--->orderBy('status', 'ASC')--}}
                    {{--->get([--}}
                      {{--\Illuminate\Support\Facades\DB::raw('COUNT(*) as value'),--}}
                      {{--\Illuminate\Support\Facades\DB::raw('status as label')--}}
                    {{--])) !!}--}}
        {{--});--}}

    </script>
@endpush