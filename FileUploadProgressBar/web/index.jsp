<%-- 
    Document   : fileUpload
    Created on : Aug 11, 2019, 10:08:34 AM
    Author     : Varad_Paralikar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>JSP Page</title>
        
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    </head>
    
  <body>

    <div class="container">
      <header class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">File Uploader</h3>
      </header>

      <main role="main">

        <div class="jumbotron">
          <h2 class="display-3">Upload Your Files</h2>
          <form id="myForm" action="upload_page.jsp" ENCTYPE="multipart/form-data" method="post">
            <div class="form-group">
              <label>Select Your File</label>
              <input type="file" name="file" class="form-control" id="fileName" placeholder="select file">
            <button type="submit" class="btn btn-primary">Upload</button>

            </div>
            <div class="form-group">
              <label>Upload Progress </label>
             <!-- PRogress Bar -->
     <div class="progress" style="margin-bottom:50px;">
       <div class="progress-bar progress-bar-striped active" style="width:50%;">
         50%
       </div>
     </div>
            </div>
            
          </form>
        </div>

        <div class="row marketing">
          <div class="col-lg-6">
            <div id="bookmarksResults"></div>


            </div>


        </div>

      </main>

      <footer class="footer">

        <p>&copy; 2019 Unikaihatsu Software Pvt Ltd.</p>
      </footer>

    </div> <!-- /container -->
    </body>
</html>
