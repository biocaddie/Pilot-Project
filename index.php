<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <script src="./js/bootstrap-dropdown.js"></script>  
    <title>BioCADDIE main page</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
   <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" />

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="./js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="./index.htm">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">BioCADDIE</h3>
      </div>

      <div class="jumbotron">
        <h1>A Pilot Project of BioCADDIE</h1>
	<p class="lead">Search literatures for Genome-Wide Association Studies(GWAS)</p>

        
        <form action='result.php' method='get' autocomplete='off'>
        <div class="input-group">
    <div class="col-lg-12">
      <input type="text" class="form-control" placeholder="Search by traits" name='query1'>
      <p><font size="2">&nbsp &nbsp&nbsp  Search examples(breast cancer, Alzheimer's disease, etc)</font></p>
      <input type="text" class="form-control" placeholder="Search by platforms" name='query2'>
      <p><font size="2">&nbsp &nbsp&nbsp   Search examples(Illumina,Affymetrix, etc)</font></p>
      <input type="text" class="form-control" placeholder="Filter by case size" name='query3'>
      <p><font size="2">&nbsp &nbsp&nbsp   Enter the minimum case size here</font></p>
    
      <div class="input-group-btn">
   
       <!-- <button class="btn btn-default" type="button" value='submit'><a href="./result.htm">Search</a></button>-->
       <input class="btn btn-default" type='submit' value='Search'>
     </div><!--input-group-btn-->
    
      </div><!--input-group-->
       </form>
        
  
       
  </div><!-- /.col-lg-12 -->

        
        <!--<p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>-->
      </div>
      <!--<div class="embed-responsive embed-responsive-16by9">
         <iframe class="embed-responsive-item" src="images/sample-jumbotron-slide5.jpg" ></iframe>
      </div>-->
      <div class="view-content">
      <div  id="flexslider-1" class="flexslider">
        
        <div>        <div><a title="bioCADDIE" href="" target=""><img class="img-responsive" typeof="foaf:Image" src="images/sample-jumbotron-slide5.jpg"
        width="1270" height="270" alt="" /></a><div id="jumbotron-slide" class="jumbotron-slide-headline-teaser-cta"><h4><a title="bioCADDIE" href="" target="">
        </a></h4></div></div>  </div>
         </div>
        </div>
      
     <div class="row marketing">
        <div class="col-lg-6">
		  <h3>Getting Started</h3>
		  <p><font size=4>Check out our comprehensive tutorials and materials.</font></p>
		  
          <h3>Resources</h3>
			<p><font size=4>See the list of resources BioCADDIE can harvest.</font></p>
                
		  <h3>Features</h3>
		  <p><font size=4>Features about BioCADDIE.</font></p>

		</div>

		<div class="col-lg-6">
		  
		  
		  <h3>Tools</h3>
		  <p><font size=4>Browse our tools which can help you to access our system more easily.</font></p>

		  <h3>Social Media</h3>
		  <p><font size=4>Check out BioCADDIE in different social media channels.</font></p>
			

			<h4><br></h4>
			<p><br></p>
				<h4><br></h4>
			<p><br></p>

			<h4><br></h4>
			<p><br></p>
				<h4><br></h4>
			<p><br></p>
            <h4><br></h4>
			<p><br></p>
                <h4><br></h4>
			<p><br></p>
                <h4><br></h4>
			<p><br></p>
		</div>
 
       <div class="navbar navbar-default navbar-fixed-bottom">
          <div class="container">
        <p class="muted pull-left"> bioCADDIE is supported by the <a href="http://grants.nih.gov/grants/guide/rfa-files/RFA-HL-14-031.html" target="_blank"> </a>
         through the NIH Big Data to Knowledge, Grant 1U24AI117966-01. <strong><a href="http://www.nih.gov/" target="_blank">NIH</a></strong> &bull; <strong>
           <a href="http://www.ucsd.edu/" target="_blank">UCSD</a></strong> &bull; <strong><a href="http://healthsciences.ucsd.edu/som/medicine/divisions/dbmi/pages/default.aspx" target="_blank">DBMI</a></strong></p>
           </div> <!-- container-->
        </div> <!-- navbar navbar-default navbar-fixed-bottom" -->
   
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
    
  </body>
</html>
