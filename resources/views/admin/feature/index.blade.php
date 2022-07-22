<x-admin-layout>
    <x-ui-layout></x-ui-layout>
    <x-admin-nav-layout></x-admin-nav-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @can('features')
        <form action="{{route('features.create')}}" method="get">
            <button class="btn btn-outline-primary" type="submit">Add + </button>
        </form>
        @endcan
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Features Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Content</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                @can('features')
                                <th>Update</th>
                                <th>Delete</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($features as $feature)
                            <tr>
                                <td>{{$feature->name}}</td>
                                <td>{{$feature->content}}</td>
                                <td>{{$feature->created_at}}</td>
                                <td>{{$feature->updated_at}}</td>
                                @can('features')
                                <td>
                                    <form method="get" action="{{route('features.edit',$feature->id)}}">
                                        <button class="btn btn-outline-primary">Update</button>
                                    </form>
                                </td>
                                <td>{{--{{route('features.delete',$feature->id)}}--}}

                                    {{-- <form method="post" action="{{route('features.delete',$feature->id)}}">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" value="{{$featureId = $feature->id }}">
                                    <button type="submit" class="btn btn-outline-danger" onclick="checkDelete()">Delete</button>
                                    </form>--}}
                                    <input type="hidden" value="{{$featureId = $feature->id }}">
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
    <x-modal featureId="{{$featureId}}">
        <a class="btn btn-primary" href="{{route('features.delete',$featureId)}}" onclick="event.preventDefault();
                    document.getElementById('deleted-form').submit();">
            {{ __('delete') }}
        </a>
        <form class="d-none" id="deleted-form" action="{{route('features.delete',$featureId)}}" method="POST">
    </x-modal>

</x-admin-layout>