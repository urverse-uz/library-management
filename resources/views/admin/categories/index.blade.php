@extends('admin.layouts.app')

@section('content')
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0">Categories Management</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped align-middle">
                <thead class="table-dark">
                <tr>
                    <!-- Sortable Column for ID -->
                    <th class="text-center">
                        ID
                        <a href="{{ route('categories.index', ['sort' => 'id_asc']) }}">
                            <i class="bi bi-sort-down"></i>
                        </a>
                        <a href="{{ route('categories.index', ['sort' => 'id_desc']) }}">
                            <i class="bi bi-sort-up"></i>
                        </a>
                        <!-- ID Filter -->
                        <input type="text" name="id_search" class="form-control form-control-sm mt-2" placeholder="ID" value="{{ request('id_search') }}">
                    </th>

                    <!-- Sortable Column for Name -->
                    <th>
                        Name
                        <a href="{{ route('categories.index', ['sort' => 'name_asc']) }}">
                            <i class="bi bi-sort-alpha-down"></i>
                        </a>
                        <a href="{{ route('categories.index', ['sort' => 'name_desc']) }}">
                            <i class="bi bi-sort-alpha-up"></i>
                        </a>
                        <!-- Name Filter -->
                        <input type="text" name="name_search" class="form-control form-control-sm mt-2" placeholder="Name" value="{{ request('name_search') }}">
                    </th>

                    <!-- Actions Column (no sorting) -->
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td class="text-center">{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm me-1">
                                <i class="bi bi-pencil-fill"></i> Edit
                            </a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                                    <i class="bi bi-trash-fill"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No categories found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-3">
            {{ $categories->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
@endsection
