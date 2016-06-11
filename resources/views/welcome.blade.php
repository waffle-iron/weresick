@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">أهلاً</div>

                <div class="panel-body">
                    ال newsfeed المفروض يبقي هنا.

                    <table class="table">
                        @foreach ($journals as $journal) 
                            <tr>  
                                <td>
                                    <a href="{{url('/journal/'.$journal->id)}}">
                                        {{$journal->name}}
                                    </a>
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
