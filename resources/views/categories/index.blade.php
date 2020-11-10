<x-app-layout>
    <x-slot name="header">
    <div class="row">
    	<div class="col-md-8 col-12">
    		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
       		</h2>
    	</div>
    	<div class="col-md-4 col-12">
    		<button class="btn btn-primary float-right" data-toggle="modal" data-target="#addCategoryModal">
    			Add Category
    		</button>
    	</div>
    </div>      
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            	<table class="table table-striped table-bordered">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Description</th>
				    </tr>
				  </thead>
				  <tbody>
				  	
				  	@if (@isset ($categories) && count($categories)>0)
				  	@foreach ($categories as $category)
				  		<tr>
					      <th scope="row">			
					      	{{ $category->id }}		      
						  </th>
						    <td>{{ $category->name }}</td>
						    <td>{{ $category->description }}</td>
					    </tr>
				  	@endforeach
				  	@endif
				 

					</tbody>    		      
				</table>

            </div>
        </div>
    </div>

    <div class="modal fade" id="addCategoryModal" tableindex="-1" arial-labelledby="exampleModalLabel" arial-hidden="true">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
	      		<div class="modal-header">
	       	 		<h5 class="modal-title">Add new category</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	         	 	<span aria-hidden="true">&times;</span>
	       	 		</button>
	     	 	</div>

	     	 	<form method="POST" action="{{ url('categories') }}">
	     	 		@csrf
	     	 		<div class="modal-body">
	      	 		 	<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Name
						    </label>
						    <div class="input-group mb-3">
							  	<div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
								</div>
								<input type="text" class="form-control" placeholder="Category name" aria-label="category" aria-describedby="basic-addon1" name="name" id="input_name">
							</div>
						</div>

						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Description
						    </label>

						    <div class="input-group mb-3">
							  	<div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  	</div>
							 	<textarea class="form-control" rows="5" placeholder="Description of category" name="description" id="input-description">
							 	</textarea>
							</div>
						</div>
	     	 		</div>     	 		
	     	 		<div class="modal-footer">
	       		 		<button type="button" class="btn btn-secondary" data-dismiss="modal">
	       		 			Close
	       		 		</button>
	       	 			<button type="submit" class="btn btn-primary">
	       	 				Save changes
	       	 			</button>
	      			</div>
	     	 	</form>
	    	</div>
	  	</div>
	</div>
</x-app-layout>