<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Table</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container">
    <h2 class="text-center mt-3 py-3">Bootstrap Table</h2>
    <div class="row">
      <div class="col-md-6 py-3 mx-auto">
        <table class="table table-bordered table-striped table-primary">
          <thead >
            <tr class="table-dark">
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Address</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Muhammad</td>
              <td>Asif</td>
              <td>asif@gmail.com</td>
              <td>Punjab</td>
            </tr>
            <tr>
              <td>Muhammad</td>
              <td>Asif</td>
              <td>asif@gmail.com</td>
              <td>Punjab</td>
            </tr>
            <tr>
              <td>Muhammad</td>
              <td>Asif</td>
              <td>asif@gmail.com</td>
              <td>Punjab</td>

            </tr>
            <tr>
              <td>Muhammad</td>
              <td>Wssif</td>
              <td>asif@gmail.com</td>
              <td>Punjab</td>
            </tr>
          </tbody>
         <!--Breadcrumbs-->
         <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="" style="text-decoration:none ;">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="" style="text-decoration:none ;">about</a>
            </li>
            <li class="breadcrumb-item">
              <a href="" style="text-decoration:none ;">table</a>
            </li>
          </ol>
         </nav>

        </table>
         <!--pagination-->
         <nav>
            <ul class="pagination">
              <li class="page-item">
                <a href="" class="page-link">Previous</a>
              </li>
              <li class="page-item active">
                <a href="" class="page-link">1</a>
              </li>
              <li class="page-item">
                <a href="" class="page-link">2</a>
              </li>
              <li class="page-item">
                <a href="" class="page-link">3</a>
              </li>
            </ul>
          </nav>

      </div>
    </div>
  </div>
</body>
</html>