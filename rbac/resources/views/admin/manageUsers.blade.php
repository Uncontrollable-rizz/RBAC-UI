


@extends('mainLayout')

@section('title','Manage Users')

@section('page-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="{{ route('dash') }}" class="link-dark">Back</a>
                <p>The Dragon Knight</p>

                <!-- Display Users -->
                <h2>Users</h2>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Role Actions</th>
                        <th>Permissions</th>
                        <th>Permission Actions</th>
                        <th> Delete User</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach($user->roles as $role)
                                    <span class="badge badge-primary text-dark">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td>

                                <form action="{{ route('user.addRole', $user->id) }}" method="POST" class="form-inline mb-2">
                                    @csrf
                                    <select name="role_id" class="form-control form-control-sm">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-success ml-2">Add</button>
                                </form>
                                <!-- Remove Role Form -->
                                <form action="{{ route('user.removeRole', $user->id) }}" method="POST" class="form-inline">
                                    @csrf
                                    <select name="role_id" class="form-control form-control-sm">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-danger ml-2">Remove</button>
                                </form>
                            </td>
                            <td>
                                @foreach($user->roles as $role)
                                    @foreach($role->permissions as $permission)
                                        <span class="badge badge-secondary text-dark">{{ $permission->name }}</span>
                                    @endforeach
                                @endforeach
                            </td>
                            <td>
                                <!-- Add Permission Form -->
                                <form action="{{ route('user.addPermission', $user->id) }}" method="POST" class="form-inline mb-2">
                                    @csrf
                                    <select name="permission_id" class="form-control form-control-sm">
                                        @foreach($permissions as $permission)
                                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-success ml-2">Add</button>
                                </form>
                                <!-- Remove Permission Form -->
                                <form action="{{ route('user.removePermission', $user->id) }}" method="POST" class="form-inline">
                                    @csrf
                                    <select name="permission_id" class="form-control form-control-sm">
                                        @foreach($permissions as $permission)
                                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-danger ml-2">Remove</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('user.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete User</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
