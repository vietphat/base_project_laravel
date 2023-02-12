<x-admin codePage="Info">
    <p>Info</p>
    <div class="row">
        <div class="col-4">
            <img width="100" height="100" src="/storage/images/{{Auth::user()->avatar}}">
            <h6>Fullname: {{Auth::user()->fullname}}</h6>
            <h6>Email: {{Auth::user()->email}}</h6>
            <h6>Phone: {{Auth::user()->phone_number_1}}</h6>
            <h6>Joining Date: {{Auth::user()->created_at}}</h6>
            <a href="{{route('admin.user.change_password')}}" class="btn btn-success"><i class="bx bx-edit"></i> Change Password</a>
        </div>
    </div>
</x-admin>