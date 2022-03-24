@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-10">
            <button wire:click="create" class="btn btn-sm btn-success">create</button>
            @if ($isModelOpen)
                @include('livewire.data.create') 
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Title</td>
                        <td>Content</td>
                        <td>Author</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    @foreach ($posts as $post)
                        <?php $no++; ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td>{{$post->author}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection