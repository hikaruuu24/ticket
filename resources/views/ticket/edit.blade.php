@extends('layouts.app')

@section('style')

@endsection

@section('content')
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header text-cMasukan bg-gray1" style="border-radius:10px 10px 0px 0px;">
                <h3 class="card-title text-white">{{$page_title}}</h3>
            </div>

            <form action="{{ route('tickets.update', $ticket->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">

                    @include('components.form-message')

                    <div class="form-group mb-3">
                        <label for="tanggal">Tanggal <small>(readonly)</small></label>
                        <input type="date" readonly class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ $ticket->tanggal }}"  placeholder="Masukan tanggal">

                        @error('tanggal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="user_id">Nama Pembuat Ticket <small>(readonly)</small></label>
                        <input type="user_id" readonly class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" value="{{$ticket->user->name}}"  placeholder="Masukan user_id">
                        @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ $ticket->judul }}"  placeholder="Masukan judul">
                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukan deskripsi" id="" rows="3">{{$ticket->deskripsi}}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="status">Status</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror" id="">
                            <option value="open" {{($ticket->status == 'open') ? 'selected' : ''}}>Open</option>
                            <option value="pending" {{($ticket->status == 'pending') ? 'selected' : ''}}>Pending</option>
                            @if (auth()->user()->getRoleNames()[0] == 'Admin')
                                <option value="close" {{($ticket->status == 'close') ? 'selected' : ''}}>Closed</option>
                            @endif
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer bg-gray1" style="border-radius:0px 0px 10px 10px;">
                    <button type="submit" class="btn btn-success btn-footer">Add</button>
                    <a href="{{ route('tickets.index') }}" class="btn btn-secondary btn-footer">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection