<x-admin codePage="Change Password">
    <div class="row">
        <form action="{{route('admin.user.store_change_password')}}" method="post">
            @csrf
            <div class="col-lg-4">
                <x-input type="password" name="old_password" label="Old Password" />
                <x-input type="password" name="password" label="New password" />
                <x-input type="password" name="confirm_password" label="Confirm Password" />
                <button class="btn btn-success">Change Password</button>
            </div>
        </form>
    </div>
</x-admin>
