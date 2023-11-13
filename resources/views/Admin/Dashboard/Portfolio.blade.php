@include ('admin.Dashboard.tech_header')
@if(session()->has('message'))
            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="false">&times;</button>

              {{session()->get('message')}}
			    </div>
          @endif
<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Portfolio</h1>
	
	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Portfolio</a></li>
        <li class="breadcrumb-item active">Portfolio</li>
    </ol>



    <div class="card mb-4">
    	<div class="card-header">
    		<div class="row">
    			<div class="col col-md-6">
    				<i class="fas fa-table me-1"></i> Portfolio
                </div>
                <div class="col col-md-6" align="right">
				<a href="{{url('dashboard/Add-Portfolio')}}" class="btn btn-info btn-sm">Add New Portfolio</a>
                </div>
            </div>
        </div>
        <div class="card-body">
        	<table id="datatablesSimple">
        		<thead>
        			<tr>
        				<th>Portfolio ID</th>
                        <th>Portfolio Name</th>
                       
                        <th>Description</th>
						<th>Image 1</th>
                       
                        <th>Action</th>
        			</tr>
        		</thead>
        		
        		<tbody>
				@foreach ($portfolios as $portfolio)
        				<tr>
        					<td width="5%">{{ $portfolio->id }}</td>
        					<td width="5%">{{ $portfolio->title }}</td>
        					
                            <td width="25%"><div style="width: 300px; overflow: hidden; text-overflow: ellipsis;">
												{!! $portfolio->description !!}
											</div></td>
							<td width="10%"><img src="/uploadsP/{{$portfolio->image1}}" style="width: 100px; height: 100px;"></td>
 
        
        					
        					<td width="10%">
                                <a href="{{url('Edit-portfolio',$portfolio->id)}}" class="btn btn-info btn-sm">Edit</a>
								
								<a onclick="return confirm('Are Your Sure To Delete This')" class="btn btn-danger btn-sm"href="{{url('Delete-portfolio',$portfolio->id)}}"  >Delete</a>
                            </td>
        				</tr>
					@endforeach
        			<tr>
        				<td colspan="7" class="text-center">No Data Found</td>
        			</tr>

        		</tbody>
        	</table>
        </div>
    </div>

</div>

@include ('admin.Dashboard.tech_footer');