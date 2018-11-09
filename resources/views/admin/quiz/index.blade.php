@extends('layouts.admin')
@section('content')
    <div class="table-responxsive p-3" style="width: 100%">
        <table class="table table-striped table-bordered table-hover" id="example" style="width: 100%;">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Time Allocated</th>
                    <th scope="col">Marks Per Question</th>
                    <th scope="col">Attempts</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($quizzes as $quiz)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$quiz->time_allocated}}</td>
                        <td>{{$quiz->mark_per_question}}</td>
                        <td>{{$quiz->attempts}}</td>
                        <td>{{$quiz->created_at}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('quiz.edit', $quiz->id) }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            {{-- <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash"></i>
                            </a> --}}
                            <form class="d-inline" method="post" action="{{ route('quiz.destroy',$quiz->quizid) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">                                    
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            <a class="btn btn-success" href="#">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>                        
                    </tr>
                @empty
                    <td colspan="7">No records found...</td>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
@section('script')
<script src="{{asset('js/datatables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );
} );
    </script>
@endsection