<x-app-layout>
    <x-slot name="header">
        <div class="row">
    	<div class="col-md-8 col-12">
    		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
           		{{ __('Books') }}
       		</h2>
    	</div>
    	<div class="col-md-4 col-12">
    		<button class="btn btn-primary float-right" data-toggle="modal" data-target="#addBookModal">
    			Add Book
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
				      <th scope="col">Title</th>
				      <th scope="col">Description</th>
				      <th scope="col">Category</th>
				    </tr>
				  </thead>
				  <tbody>
				  	
				  	@if (@isset ($books) && count($books)>0)
				  	@foreach ($books as $book)
				  		<tr>
					      <th scope="row">			
					      	{{ $book->id }}		      
						  </th>
						    <td>{{ $book->title }}</td>
						    <td>{{ $book->description }}</td>
						    <td>{{ $book->category_id }}</td>
					    </tr>
				  	@endforeach
				  	@endif
				 

					</tbody>    		      
				</table>


            </div>
        </div>
    </div>

    <div class="modal fade" id="addBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add new book</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" action="{{ url('books') }}" enctype="multipart/form-data">
					@csrf

					<div class="modal-body">

						{{--TITLE--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Title
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <input type="text" class="form-control" placeholder="Book title" aria-label="book" aria-describedby="basic-addon1" name="title">
							</div>
						</div>

						{{--DESCRIPTION--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Description
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <textarea class="form-control" cols="5" placeholder="Book description" name="description">
							  </textarea>
							</div>
						</div>

						{{--YEAR--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Year
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <input type="number" class="form-control" placeholder="Book year" name="year">
							</div>
						</div>

						{{--PAGES--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Pages
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <input type="number" class="form-control" placeholder="Book pages" name="pages">
							</div>
						</div>

						{{--ISBN--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	ISBN
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <input type="text" class="form-control" placeholder="Book ISBN" name="isbn">
							</div>
						</div>

						{{--EDITORIAL--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Editorial
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <input type="text" class="form-control" placeholder="Book editorial" name="editorial">
							</div>
						</div>

						{{--EDITION--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Edition
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <input type="number" class="form-control" placeholder="Book edition" name="edition">
							</div>
						</div>

						{{--AUTOR--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Author
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <input type="text" class="form-control" placeholder="Book author" name="author">
							</div>
						</div>

						{{--COVER--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Cover
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <input type="file" class="form-control" name="cover">
							</div>
						</div>

						{{--CATEGORY--}}
						<div class="form-group">
						    <label for="exampleInputEmail1">
						    	Category
						    </label>

						    <div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">@</span>
							  </div>
							  <select class="form-control" name="category_id">	
							  		@if (isset($categories) && count($categories)>0)
							  		@foreach ($categories as $category)
							  			<option value="{{ $category->id}}"> {{ $category->name}}							  									  				
							  			</option>
							  		@endforeach
							  		@endif		
							  </select>
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">
							Cancel
						</button>
						<button type="submit" class="btn btn-primary">
							Save book
						</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</x-app-layout>
