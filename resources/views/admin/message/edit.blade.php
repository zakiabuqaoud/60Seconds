<x-admin-layout>
    <x-ui-layout></x-ui-layout>
    <x-admin-nav-layout></x-admin-nav-layout>
    <div class="container-fluid">
        <h3 class="fst-italic">Edit Message</h3>
        <form class="row g-3 m f " action="{{ route('messages.update',$message->id) }}" method="post">
            @csrf
            @method('put')
            <div class="col-md-5">
                <label for="Name" class="form-label">Full Name</label>
                <input name="fullName" type="text" class="form-control" id="Name" value="{{old('message',$message->fullName)}}">
                @error('fullName')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="inputPassword4" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" id="Type" value="{{old('email',$message->email)}}">
                @error('email')
                <p style=" color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="formFileSm" class="form-label">Content</label>
                <input name="content" class="form-control form-control-sm" id="formFileSm" type="text" value="{{old('email',$message->content)}}">
                @error('content')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>



            <div class=" col-12" style="margin:15px">
                <button type="submit" class="btn btn-outline-primary">Update Message</button>
            </div>
        </form>
    </div>
</x-admin-layout>