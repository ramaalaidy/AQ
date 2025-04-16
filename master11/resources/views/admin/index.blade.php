@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Contact Messages</h1>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone ?? 'N/A' }}</td>
                            <td>{{ Str::limit($message->message, 50) }}</td>
                            <td>{{ $message->created_at->format('d M Y H:i') }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info" 
                                   data-toggle="modal" 
                                   data-target="#messageModal{{ $message->id }}">
                                    View
                                </a>
                                
                                <form action="{{ route('messages.destroy', $message) }}" 
                                      method="POST" 
                                      style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="messageModal{{ $message->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Message Details</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Name:</strong> {{ $message->name }}</p>
                                        <p><strong>Email:</strong> {{ $message->email }}</p>
                                        <p><strong>Phone:</strong> {{ $message->phone ?? 'N/A' }}</p>
                                        <p><strong>Message:</strong></p>
                                        <p>{{ $message->message }}</p>
                                        <p class="text-muted">
                                            Sent at: {{ $message->created_at->format('d M Y H:i') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            {{ $messages->links() }}
        </div>
    </div>
</div>
@endsection