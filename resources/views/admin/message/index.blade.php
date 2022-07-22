<x-admin-layout>
    <x-ui-layout></x-ui-layout>
    <x-admin-nav-layout></x-admin-nav-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @can('messages')
        <form action="{{route('messages.create')}}" method="get">
            <button class="btn btn-outline-primary" type="submit">Add + </button>
        </form>
        @endcan
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Messages Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>FullName</th>
                                <th>Email</th>
                                <th>Content</th>
                                <th>Created_at</th>
                                @can('messages')
                                <th>Update</th>
                                <th>Delete</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $message)
                            <tr>
                                <td>{{$message->fullName}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->content}}</td>
                                <td>{{$message->created_at}}</td>
                                @can('messages')
                                <td>
                                    <form method="get" action="{{route('messages.edit',$message->id)}}">
                                        <button class="btn btn-outline-primary">Update</button>
                                    </form>
                                </td>
                                <td>{{--
                                    <form method="post" action="{{route('messages.delete',$message->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return checkDelete()">Delete</button>
                                    </form>--}}
                                    <input type="hidden" value="{{$messageId = $message->id }}">
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
    <x-modal messageId="{{$messageId}}">
        <a class="btn btn-primary" href="{{route('messages.delete',$messageId)}}" onclick="event.preventDefault();
                    document.getElementById('deleted-form').submit();">
            {{ __('delete') }}
        </a>
        <form class="d-none" id="deleted-form" action="{{route('messages.delete',$messageId)}}" method="POST">
    </x-modal>
</x-admin-layout>