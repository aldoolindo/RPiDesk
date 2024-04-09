<x-app-web-layput>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Import Excel Data into Database in Laravel 10</h4>
          </div>
          <div class="card-body">

            <form action="{{ url('customer/import') }}" method="POST" enctype="multipart/form-data">
              @crsf

              <input type="file" name="import_file" class="form-control" />
              <button type="submit" class="btn btn-primary">import</button>
            
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>



</x-app-web-layput>
