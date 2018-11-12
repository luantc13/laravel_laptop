@extends('admin.layout.master')

@section('content')  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	        <h1>
	            Dòng sản phẩm
	            <small>Sửa</small>
	        </h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/dong-san-pham"><i class="fa fa-database"></i> Dòng sản phẩm</a></li>
	            <li class="active">Sửa</li>
	        </ol>
	    </section>
	    <!-- Main content -->
	    <section class="content container-fluid">

			<div class="box box-primary">
			    {{-- <div class="box-header with-border">
			        <h3 class="box-title">Quick Example</h3>
			    </div> --}}
			    <!-- /.box-header -->
			    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{Session('success')}}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{Session('error')}}
                    </div>
                @endif
			    <!-- form start -->
			    <form role="form" method="POST" enctype="multipart/form-data" action="admin/dong-san-pham/sua/{{ $typeProduct->id }}">
			    	<input type="hidden" name="_token" value="{{csrf_token()}}">
			        <div class="box-body">
			        	<div class="form-group">
			        		<select name="lstIDCategory" class="form-control" required="">
		        			@foreach ($category as $item)
		        				<option value="{{ $item->id }}"
		        				@if ($item->id == $typeProduct->id_category)
									{{ 'selected' }}
								@endif
		        				>{{ $item->name }}</option>
		        			@endforeach
			        		</select>
			        	</div>

			            <div class="form-group">
			                <label for="txtName">Tên dòng sản phẩm</label>
			                <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên dòng sản phẩm" required="" value="{{ $typeProduct->name }}">
			            </div>

			        </div>
			        <!-- /.box-body -->
			        <div class="box-footer">
			            <button type="submit" class="btn btn-primary">Sửa</button>
			        </div>
			    </form>
			</div>
			<!-- /.box -->

	    </section>
	    <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
@endsection

