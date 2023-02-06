<x-admin codePage="Show">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Avatar</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="align-middle">{{$user->id}}</td>
                <td class="align-middle">
                    <img src="/storage/images/{{$user->avatar}}" width="50" height="50" alt="">
                </td>
                <td class="align-middle">{{$user->fullname}}</td>
                <td class="align-middle">{{$user->email}}</td>
                <td class="align-middle">{{$user->phone_number_1}}</td>
                <td class="align-middle">{{$user->address}}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{route('admin.user.list')}}" class="btn"><i class="ri-arrow-go-back-line"></i></a>
</x-admin>