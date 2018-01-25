<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Categorias</title>
    <link rel="stylesheet" href="{{ asset('bower_components/boostrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  </head>
  <body>
    <header class="header">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Quejate ya!!</h1>
          <p class="lead">Aqui podras administrar las categorias de Quejateya!!!</p>
        </div>
      </div>
    </header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="float-right">
                <a href="{{route('admin.categories.create')}}" class="btn btn-primary btn-lg">
                  <i class="fa fa-plus"> </i> Crear
                </a>
              </div>
              <h3 class="card-title">Categorias</h3>
            </div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th>Nombre</th>
                    <th>Hashtag</th>
                    <th>Publicado</th>
                    <th width="180px">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>
                      <a href="#" class="btn btn-success">
                        <i class="fa fa-plus"></i>
                      </a>
                      <a href="#" class="btn btn-warning">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a href="#" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>

                  </tr>
                  <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>
                      <a href="#" class="btn btn-success">
                        <i class="fa fa-plus"></i>
                      </a>
                      <a href="#" class="btn btn-warning">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a href="#" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>

                  </tr>
                  <tr>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>
                      <a href="#" class="btn btn-success">
                        <i class="fa fa-plus"></i>
                      </a>
                      <a href="#" class="btn btn-warning">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a href="#" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>

                  </tr>
                  <tr>
                    <td>4</td>
                    <td>4</td>
                    <td>4</td>
                    <td>
                      <a href="#" class="btn btn-success">
                        <i class="fa fa-plus"></i>
                      </a>
                      <a href="#" class="btn btn-warning">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a href="#" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>

                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('bower_components/boostrap/dist/js/bootstrap.min.js')}}" charset="utf-8"></script>
  </body>
</html>
