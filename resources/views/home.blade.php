@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$journal->name}}</div>
                <div class="panel-body">
                <!-- New Post Form -->
                    <form action="{{ url('post')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Post Content -->
                        <div class="form-group">

                            <label for="post-content" class="col-sm-3 control-label">اكتب</label>

                            <input type="hidden" name='journal_id' value="{{ $journal->id }}"/>

                            <div class="col-sm-6">
                                <input type="text" name="content" id="post-content" class="form-control" value="{{ old('post') }}">
                            </div>
                        </div>

                        <!-- Post Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>اكتب
                                </button>
                            </div>
                        </div>
                    </form>

                    <table class="table">
                    
                    @foreach ($posts as $post) 
                    <tr>  
                        <td>
                        {{$post->content}}
                        </td>
                    </tr>
                    @endforeach
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
