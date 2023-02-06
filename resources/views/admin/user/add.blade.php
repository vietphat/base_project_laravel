<x-admin codePage="Add-User">
    <p>Add User</p>
    <form action="{{route("admin.user.store")}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <x-input label="Full Name" name="fullname" />
                <x-input type="phone" label="Phone" name="phone_number_1" />
                <x-input type="address" label="Address" name="address" />
                <button class="btn btn-sm shadow btn-success">Add User</button>
            </div>
            <div class="col-lg-6">
                <x-input type="email" label="Email" name="email" />
                <x-input type="password" label="Password" name="password" />
                <x-input type="password" label="Confirm Password" name="confirm_password" />
            </div>
        </div>
    </form>
    <a href="{{route('admin.user.list')}}" class="btn"><i class="ri-arrow-go-back-line"></i></a>
</x-admin>
