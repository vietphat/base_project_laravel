<x-admin codePage="List-User">
    <p>List User</p>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Avatar</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUser as $item)
                <tr>
                    <td class="align-middle">{{ $item->id }}</td>
                    <td class="align-middle">
                        <img src="/storage/images/{{ $item->avatar }}" width="50" height="50" alt="">
                    </td>
                    <td class="align-middle">{{ $item->fullname }}</td>
                    <td class="align-middle">{{ $item->email }}</td>
                    <td class="align-middle">{{ $item->phone_number_1 }}</td>
                    <td class="align-middle">{{ $item->address }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.user.show', $item->id) }}" class="btn btn-info shadow"><i
                                class="ri-eye-line"></i></a>
                        <a href="{{ route('admin.user.edit', $item->id) }}" class="btn btn-warning shadow"><i
                                class="ri-edit-2-line"></i></i></a>
                        <a onclick="return confirm('delete ?')" href="{{ route('admin.user.destroy', $item->id) }}"
                            class="btn btn-danger shadow"><i class="ri-delete-bin-line"></i></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin>
