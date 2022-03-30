@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-left">
            <div class="row">
                <div class="col-md-6">
                    <div class="formHeader mt-3">
                        <h3>Form List</h3>    
                    </div> 
                </div>
                <div class="col-md-6 text-right">
                    <!-- <button class="btn btn-info mt-3" title="Add fields" id="modal_view_right" data-toggle="modal" data-target="#information_modal">Add Form</button> -->
                    <a class="btn btn-info mt-3" href="/form/add">Create Form</a>                
                </div>
            </div>
            <div class="form-list">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('custom-js')
<script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('forms.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'Title'},
        ]
    });   
  });
</script>
@endsection