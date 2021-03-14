
    @csrf
    @if (Route::getCurrentRoute()->uri != 'admin/memories/create')
        @method('PUT')   
    @endif
   
    <div class="row">
        <div class="d-flex justify-content-center my-4">
            <img {{isset($memory->avatar) ? "width=280px" : ''}}  src="{{(isset($memory->avatar)) ? url("storage/$memory->avatar") : asset('logo.png')}}" alt="logo Serapys">
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar" {{(Route::getCurrentRoute()->uri == 'admin/memories/create') ? "required" : ''}}>
                <label for="avatar" class="mt-2" style="color:#FF8A5F">Chose an avatar</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="mt-2" style="color:#FF8A5F">Name</label>
                <input type="text" class="form-control" value="{{$memory->name ?? old('name')}}" id="name" name="name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="surname" class="mt-2" style="color:#FF8A5F">Surname</label>
                <input type="text" class="form-control" value="{{$memory->surname ?? old('surname')}}" id="surname" name="surname" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="bird" class="mt-2" style="color:#FF8A5F">Bird</label>
                <input type="date" class="form-control" value="{{$memory->bird ?? old('bird')}}" id="bird" name="bird" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="death" class="mt-2" style="color:#FF8A5F">Death</label>
                <input type="date" class="form-control" value="{{$memory->death ?? old('death')}}" id="death" name="death" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="biography" class="mt-2" style="color:#FF8A5F">Biography</label>
                <textarea class="form-control" name="biography" id="biography" required cols="10" rows="2">{{$memory->biography ?? old('biography')}}</textarea>
            </div>
        </div>

        <div class="col-md-12 ">
            <div class="form-group">
                <button class="btn mt-3 bt">Save ></button>
            </div>
        </div>