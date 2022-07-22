<x-admin-layout>
    <x-ui-layout></x-ui-layout>
    <x-admin-nav-layout></x-admin-nav-layout>
    <div class="container-fluid">
        <h3 class="title fst-italic">Edit Client</h3>
        <form class="row g-3 m f " action="{{ route('clients.update',$client->id) }}" method="post">
            @csrf
            @method('put')
            <div class="col-md-5">
                <label for="Name" class="form-label">Name Arabic</label>
                <input name="nameArabic" type="text" class="form-control" id="Name" value="{{old('nameArabic',$client->getTranslation('name','ar'))}}">
                @error('nameArabic')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="Name" class="form-label">Name English</label>
                <input name="name" type="text" class="form-control" id="Name" value="{{old('name',$client->getTranslation('name','en'))}}">
                @error('name')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="inputPassword4" class="form-label">Content Arabic</label>
                <input name="contentArabic" type="text" class="form-control" id="Type" value="{{old('contentArabic',$client->getTranslation('content','ar'))}}">
                @error('contentArabic')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="inputPassword4" class="form-label">Content English</label>
                <input name="content" type="text" class="form-control" id="Type" value="{{old('content',$client->getTranslation('content','en'))}}">
                @error('content')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" id="email" value="{{old('email',$client->email)}}">
                @error('email')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="formFileSm" class="form-label">Image</label>
                <input name="image" class="form-control form-control-sm" id="formFileSm" type="file">
                @error('image')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label style="display:block" class="form-label">Evaluation</label>
                <select style="display:block" name="select" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
                @error('select')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label style="margin-top:10px" class="form-label" style="display:block">Permission</label>
                <div class="form-check">
                    @foreach($permissions as $code => $label)
                    <input class="form-check-input" type="checkbox" name="permission[]" id="flexCheckDefault" value="{{$code}}">
                    <label class="form-check-label" for="flexCheckDefault">{{$label}} </label>
                    <br>
                    @endforeach
                </div>
            </div>
            <input type="hidden" name="oldEmail" value="{{$client->email}}">
            <div class="col-12" style="margin:15px">
                <button type="submit" class="btn btn-outline-primary">Update Clint</button>
            </div>
        </form>
    </div>
</x-admin-layout>