<x-admin codePage="Edit User">
    <p>Update User</p>
    <form action="{{route('admin.user.update',$user->id)}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <x-input value="{{$user->email}}" type="email" label="Email" name="email" />
                <x-input value="{{$user->fullname}}" label="Full Name" name="fullname" />
                <x-input value="{{$user->phone_number_1}}" type="phone" label="Phone" name="phone_number_1" />
                <x-input value="{{$user->address}}" type="address" label="Address" name="address" />
                <button class="btn btn-sm shadow btn-success">Update</button>
            </div>
        </div>
    </form>
    <a href="{{route('admin.user.list')}}" class="btn"><i class="ri-arrow-go-back-line"></i></a>
</x-admin>