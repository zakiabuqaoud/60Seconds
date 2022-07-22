<x-admin-layout>
    <x-ui-layout></x-ui-layout>
    <x-admin-nav-layout></x-admin-nav-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @can('clients')
        <form action="{{route('clients.create')}}" method="get">
            <button class="btn btn-outline-primary" type="submit">Add + </button>
        </form>
        @endcan
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Clients Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Content</th>
                                <th>Evaluation</th>
                                <th>Created_at</th>
                                @can('clients')
                                <th>Update</th>
                                <th>Delete</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <td>{{$client->name}}</td>
                                <td>{{$client->content}}</td>
                                <td>{{$client->Evaluation}}</td>
                                <td>{{$client->created_at}}</td>
                                @can('clients')
                                <td>
                                    <form method="get" action="{{route('clients.edit',$client->id)}}">
                                        <button class="btn btn-outline-primary">Update</button>
                                    </form>
                                </td>
                                <td>
                                    {{--
                                    <form method="post" action="{{route('clients.delete',$client->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return checkDelete()">Delete</button>
                                    </form>--}}
                                    <input type="hidden" value="{{$clientId = $client->id }}">
                                    <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <x-modal clientId="{{$clientId}}">
        <a class="btn btn-primary" href="{{route('clients.delete',$clientId)}}" onclick="event.preventDefault();
                    document.getElementById('deleted-form').submit();">
            {{ __('delete') }}
        </a>
        <form class="d-none" id="deleted-form" action="{{route('clients.delete',$clientId)}}" method="POST">
    </x-modal>

</x-admin-layout>