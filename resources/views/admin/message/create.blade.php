<x-admin-layout>
    <x-ui-layout></x-ui-layout>
    <x-admin-nav-layout></x-admin-nav-layout>
    <div class="container-fluid">
        <h3 class="fst-italic">Create Message</h3>
        <form class="row g-3 m f " action="{{ route('messages.store') }}" method="post">
            @csrf
            <div class="col-md-5">
                <label for="Name" class="form-label">FullName</label>
                <input name="fullName" type="text" class="form-control" id="Name">
                @error('fullName')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="inputPassword4" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" id="Type">
                @error('email')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="formFileSm" class="form-label">Content</label>
                <input name="content" class="form-control form-control-sm" id="formFileSm" type="input">
                @error('content')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>

            <div class="col-12" style="margin:15px">
                <button type="submit" class="btn btn-outline-primary">Create Message</button>
            </div>
        </form>
    </div>
</x-admin-layout>