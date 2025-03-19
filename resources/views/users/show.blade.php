<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between mb-3">
                    <h2>User Details</h2>
                    <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Name:</strong> {{ $user->name }}
                        </div>
                        <div class="mb-3">
                            <strong>Email:</strong> {{ $user->email }}
                        </div>
                        <div class="mb-3">
                            <strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}
                        </div>
                        <div class="mb-3">
                            <strong>Last Updated:</strong> {{ $user->updated_at->format('Y-m-d H:i:s') }}
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>