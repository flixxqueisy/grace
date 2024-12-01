<div class="table-responsive">
    <table class="table table-striped mb-0">
        <thead>
            <tr>
                <th>Detail</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>Name</td>
                <td>{{$user->name}}</td>
            </tr>
            <tr>

                <td>Email</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>

                <td>Role(s)</td>
                <td>
                    @foreach ($user->getRoleNames() as $role)
                        {{ $role }}
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
