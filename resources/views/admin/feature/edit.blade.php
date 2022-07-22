<x-admin-layout>
    <x-ui-layout></x-ui-layout>
    <x-admin-nav-layout></x-admin-nav-layout>
    <div class="container-fluid">
        <h3 class="fst-italic">Edit Feature</h3>
        <form class="row g-3 m f " action="{{ route('features.update',$feature->id) }}" method="post">
            @csrf
            @method('put')
            <div class="col-md-5">
                <label for="Name" class="form-label">Name Arabic</label>
                <input name="nameArabic" type="text" class="form-control" id="Name" value="{{old('nameArabic',$feature->getTranslation('name','ar'))}}">
                @error('nameArabic')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="Name" class="form-label">Name English</label>
                <input name="name" type="text" class="form-control" id="Name" value="{{old('name',$feature->getTranslation('name','en'))}}">
                @error('name')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="inputPassword4" class="form-label">Content Arabic</label>
                <input name="contentArabic" type="text" class="form-control" id="Type" value="{{old('contentArabic',$feature->getTranslation('content','ar'))}}">
                @error('contentArabic')
                <p style=" color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="inputPassword4" class="form-label">Content English</label>
                <input name="content" type="text" class="form-control" id="Type" value="{{old('content',$feature->getTranslation('content','en'))}}">
                @error('content')
                <p style=" color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="formFileSm" class="form-label">Image</label>
                <input name="image" class="form-control form-control-sm" id="formFileSm" type="file">
                @error('image')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <div class="col-12" style="margin:15px">
                <button type="submit" class="btn btn-outline-primary">Update Feature</button>
            </div>
        </form>
    </div>
</x-admin-layout>