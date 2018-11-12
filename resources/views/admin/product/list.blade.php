@extends('admin.layout.master')

@section('content')  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	        <h1>
	            Sản phẩm
	            <small>Danh sách</small>
	        </h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/san-pham"><i class="fa fa-laptop"></i> Sản phẩm</a></li>
	            <li class="active">Danh sách</li>
	        </ol>
	        @if (session('success'))
                <div class="alert alert-success">
                    {{Session('success')}}
                </div>
            @endif
	    </section>
	    <!-- Main content -->
	    <section class="content container-fluid">

			<div class="row">
			    <div class="col-xs-12">
			        <div class="box">
			            {{-- <div class="box-header">
			                <h3 class="box-title">Hover Data Table</h3>
			            </div> --}}
			            <!-- /.box-header -->
			            <div class="box-body">
			                <table id="example2" class="table table-bordered table-hover">
			                    <thead>
			                        <tr>
			                        	<th>Tên sản phẩm</th>
			                        	<th>Tên không dấu</th>
			                        	<th>Tên dòng sản phẩm</th>
			                            <th>Tên hãng</th>
			                            <th>Thông tin</th>
			                            <th>Hình ảnh</th>
			                            <th>Độ hot</th>
			                            <th>Chỉnh sửa/Xóa</th>
			                        </tr>
			                    </thead>
			                    <tfoot>
			                        <tr>
			                            <th>Tên sản phẩm</th>
			                        	<th>Tên không dấu</th>
			                        	<th>Tên dòng sản phẩm</th>
			                            <th>Tên hãng</th>
			                            <th>Thông tin</th>
			                            <th>Hình ảnh</th>
			                            <th>Độ hot</th>
			                            <th>Chỉnh sửa/Xóa</th>
			                        </tr>
			                    </tfoot>
			                    <tbody>

		                    	@foreach ($product as $item)
		                    		<tr>
			                            <td>{{ $item->name }}</td>
			                            <td>{{ $item->slug }}</td>
			                            <td>{{ $item->typeProduct->name }}</td>
			                            <td>{{ $item->typeProduct->category->name }}</td>
			                            <td>
			                            	<ul>
			                            		<li>Giá gốc: <b>{{ formatPrice($item->unit_price) }} VNĐ</b></li>
			                            		<li>Giá khuyến mãi (nếu khác 0): <b>{{ formatPrice($item->promotion_price) }} VNĐ</b></li>
			                            		<li>Số lượng: <b>{{ $item->quantity }}</b></li>
			                            		<li>Số lượng đã bán: <b>{{ $item->quantity_sold }}</b></li>
			                            		<li>Xếp hạng: <b>{{ $item->rating }}</b></li>
			                            		<li>
					                            	<!-- Button trigger modal -->
													<a class="" data-toggle="modal" data-target="#view-information-{{ $item->id }}" style="cursor: pointer;">
													Xem thêm
													</a>

													<!-- Modal -->
													<div class="modal fade" id="view-information-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													    <div class="modal-dialog modal-lg">
													        <div class="modal-content">
													            <div class="modal-header">
													                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													                <h4 class="modal-title" id="myModalLabel">Thông tin của sản phẩm có tên <b>{{ $item->name }}</b></h4>
													            </div>
													            <div class="modal-body">
												            		
																	<div class="panel panel-default">
																	    <div class="panel-heading">
																	        <h3 class="panel-title">Mô tả:</h3>
																	    </div>
																	    <div class="panel-body">
																	        {{ $item->description }}
																	    </div>
																	</div>

																	<div class="panel panel-default">
																	    <div class="panel-heading">
																	        <h3 class="panel-title">Chi tiết:</h3>
																	    </div>
																	    <div class="panel-body">
																	        {!! $item->detail !!}
																	    </div>
																	</div>

																	<div class="panel panel-default">
																	    <div class="panel-heading">
																	        <h3 class="panel-title">Đánh giá:</h3>
																	    </div>
																	    <div class="panel-body">
																	        <table id="review" class="table table-bordered table-hover">
																	        	<thead>
															                        <tr>
															                        	<th>Tên người dùng</th>
															                        	<th>Email</th>
															                        	<th width="400px">Nội dung</th>
															                            <th>Xếp hạng</th>
															                            <th>Xóa</th>
															                        </tr>
															                    </thead>
															                    <tfoot>
															                        <tr>
															                        	<th>Tên người dùng</th>
															                        	<th>Email</th>
															                        	<th>Nội dung</th>
															                            <th>Xếp hạng</th>
															                            <th>Xóa</th>
															                        </tr>
															                    </tfoot>
															                    <tbody>
															                    	@foreach ($item->reviewProduct as $itemReview)
															                    		<tr>
															                    			<td>{{ $itemReview->name }}</td>
															                    			<td>{{ $itemReview->email }}</td>
															                    			<td>{{ $itemReview->content }}</td>
															                    			<td>{{ $itemReview->rating }}</td>
															                    			<td>
															                    				<!-- Button trigger modal -->
																								<button class="btn btn-danger" data-toggle="modal" data-target="#deleteReview-{{ $itemReview->id }}"><i class="fa fa-times">
																								Xóa
																								</i></button>

																								<!-- Modal -->
																								<div class="modal fade" id="deleteReview-{{ $itemReview->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																								    <div class="modal-dialog">
																								        <div class="modal-content">
																								            <div class="modal-header">
																								                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																								                <h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
																								            </div>
																								            <div class="modal-body">
																								                Bạn có muốn xóa đánh giá của người dùng có tên <b>{{ $itemReview->name }}</b>?
																								            </div>
																								            <div class="modal-footer">
																								                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
																								                <a href="admin/danh-gia/xoa/{{ $itemReview->id }}"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
																								            </div>
																								        </div>
																								    </div>
																								</div>
															                    			</td>
															                    		</tr>
															                    	@endforeach
															                    </tbody>
																	        </table>
																	    </div>
																	</div>

													            </div>
													            <div class="modal-footer">
													                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
													            </div>
													        </div>
													    </div>
													</div>
												</li>
											</ul>
			                            </td>
			                            <td>
			                            	<!-- Button trigger modal -->
											<button class="btn btn-default" data-toggle="modal" data-target="#view-image-{{ $item->id }}">
											Xem ảnh
											</button>

											<!-- Modal -->
											<div class="modal fade" id="view-image-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											    <div class="modal-dialog">
											        <div class="modal-content">
											            <div class="modal-header">
											                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											                <h4 class="modal-title" id="myModalLabel">Hình ảnh của sản phẩm có tên <b>{{ $item->name }}</b></h4>
											            </div>
											            <div class="modal-body text-center">
										            	@foreach ($item->imageProduct as $image)
										            		<img src="public/upload/product/{{ $image->name }}" width="250px">
										            	@endforeach
											                
											            </div>
											            <div class="modal-footer">
											                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
											            </div>
											        </div>
											    </div>
											</div>
			                            </td>
			                            <td  class="text-center">
		                            	@if ($item->hot == 1)
		                            		<!-- Button trigger modal -->
											<button class="btn btn-danger" data-toggle="modal" data-target="#change-active-{{ $item->id }}">
											Hot
											</button>

											<!-- Modal -->
											<div class="modal fade" id="change-active-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											    <div class="modal-dialog">
											        <div class="modal-content">
											            <div class="modal-header">
											                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											                <h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
											            </div>
											            <div class="modal-body">
											                Bạn có muốn thay đổi độ hot của sản phẩm có tên <b>{{ $item->name }}</b>?
											            </div>
											            <div class="modal-footer">
											                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
											                <a href="admin/san-pham/doi-do-hot/{{ $item->id }}"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
											            </div>
											        </div>
											    </div>
											</div>
		                            	@else
		                            		<!-- Button trigger modal -->
											<button class="btn btn-primary" data-toggle="modal" data-target="#change-active-{{ $item->id }}">
											Bình thường
											</button>

											<!-- Modal -->
											<div class="modal fade" id="change-active-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											    <div class="modal-dialog">
											        <div class="modal-content">
											            <div class="modal-header">
											                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											                <h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
											            </div>
											            <div class="modal-body">
											                Bạn có muốn thay đổi độ hot của sản phẩm có tên <b>{{ $item->name }}</b>?
											            </div>
											            <div class="modal-footer">
											                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
											                <a href="admin/san-pham/doi-do-hot/{{ $item->id }}"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
											            </div>
											        </div>
											    </div>
											</div>
		                            	@endif
			                            </td>
			                            <td  class="text-center">
			                            	<a href="admin/san-pham/sua/{{ $item->id }}"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i>Sửa</button></a>
			                            	
			                            	<!-- Button trigger modal -->
											<button class="btn btn-danger" data-toggle="modal" data-target="#delete-{{ $item->id }}"><i class="fa fa-times">
											Xóa
											</i></button>

											<!-- Modal -->
											<div class="modal fade" id="delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											    <div class="modal-dialog">
											        <div class="modal-content">
											            <div class="modal-header">
											                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											                <h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
											            </div>
											            <div class="modal-body">
											                Bạn có muốn xóa sản phẩm có tên <b>{{ $item->name }}</b>?
											            </div>
											            <div class="modal-footer">
											                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
											                <a href="admin/san-pham/xoa/{{ $item->id }}"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
											            </div>
											        </div>
											    </div>
											</div>
			                            </td>
			                        </tr>
		                    	@endforeach
			                        
			                    </tbody>
			                </table>
			            </div>
			            <!-- /.box-body -->
			        </div>

			    </div>
			    <!-- /.col -->

				




			</div>
			<!-- /.row -->



	    </section>
	    <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
@endsection

@section('script')

<script>
    $(function () {
        $('#example1').DataTable();
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        });
    })
</script>

@endsection