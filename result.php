<?php
    require_once 'init.php';
    $offset = 1;
    
    if (isset($_GET['offset'])){
        $offset = $_GET['offset'];
    }
    if(isset($_GET['query1'])){
        $q=$_GET['query1'];
        //echo $offset;
    }
    if(isset($_GET['query2'])){
        $r=$_GET['query2'];
        //echo $offset;
    }
    #echo print_r($_GET);
    if(strlen($_GET['query3'])>0){
        $s=$_GET['query3'];
        #echo $s;
        $query=$es->search([
                           'index' => ['gwas2'],
                           'body'=>[
                           'from'=>($offset-1)*300,
                           'size'=>300,
                           'query'=>[
                           'bool'=>[
                           'must'=>[
                           0=>['multi_match'=>[
                           'fields'=>['trait','platform','source','stage','ethnicity'],
                           'query'=>$q,
                           'fuzziness'=>'AUTO',
                           'operator'=>'and',
                           'zero_terms_query'=>'all']],
                           1=>['multi_match'=>[
                           'fields'=>['trait','platform','source','stage','ethnicity'],
                           'query'=>$r,
                           'fuzziness'=>'AUTO',
                           'operator'=>'and',
                           'zero_terms_query'=>'all']],
                           2=>['range'=>['case_size'=>['gte'=>$s]]]
                           
                           //                                0=>['query_string'=>[
                           //                                    'default_field'=>'trait',
                           //                                    'query'=>$q]],
                           //
                           //                                1=>['query_string'=>[
                           //                                    'default_field'=>'platform',
                           //                                    'query'=>$r]],
                           ////                                2=>['range'=>['case_size'=>['gte'=>$_GET['query3']]]],
                           ],
                           ]
                           ],
                           'facets'=>[
                           'tag'=>[
                           'terms'=>[
                           'field'=>'TI',
                           'size'=>10]
                           ]
                           ]
                           ]]);


    }else{
        $s="";
        #echo $q;
        $query=$es->search([
                           'index' => ['gwas2'],
                           'body'=>[
                           'from'=>($offset-1)*300,
                           'size'=>300,
                           'query'=>[
                           'bool'=>[
                           'must'=>[
                           0=>['multi_match'=>[
                           'fields'=>['trait','platform','source','stage','ethnicity'],
                           'query'=>$q,
                           'fuzziness'=>'AUTO',
                           'operator'=>'and',
                           'zero_terms_query'=>'all']],
                           1=>['multi_match'=>[
                           'fields'=>['trait','platform','source','stage','ethnicity'],
                           'query'=>$r,
                           'fuzziness'=>'AUTO',
                           'operator'=>'and',
                           'zero_terms_query'=>'all']],
                           #2=>['range'=>['case_size'=>['gte'=>$s]]]
                           
                           //                                0=>['query_string'=>[
                           //                                    'default_field'=>'trait',
                           //                                    'query'=>$q]],
                           //
                           //                                1=>['query_string'=>[
                           //                                    'default_field'=>'platform',
                           //                                    'query'=>$r]],
                           ////                                2=>['range'=>['case_size'=>['gte'=>$_GET['query3']]]],
                           ],
                           ]
                           ],
                           'facets'=>[
                           'tag'=>[
                           'terms'=>[
                           'field'=>'TI',
                           'size'=>10]
                           ]
                           ]
                           ]]);

        
    }
    //echo '<pre>',print_r($query),'</pre>';
    //die();
    if($query['hits']['total']>=1){
        //echo $query['hits']['total'];
        $results=$query['hits']['hits'];
        //echo count($results);
        //echo print_r($query['facets']['tag']['terms']);
        
    }

    
    function get_previsoue($offset){
        if($offset>1){
            $offset = $offset -1 ;
        }
        return $offset;
    }
    function get_next($offset,$num){
        if($offset<$num/300){
            $offset = $offset +1 ;
        }
        return $offset;
    }
    function show_current_record_number($offset,$num){
        if($offset<$num/300){
            return ((($offset-1)*300)+1)."-".($offset)*300;
        }
        else{
            return ((($offset-1)*300)+1)."-".$num;
        }
    }
    ?>
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

<title>Search result page</title>

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
<li role="presentation" class="active"><a href="index.php">Home</a></li>
<li role="presentation"><a href="#">About</a></li>
<li role="presentation"><a href="#">Contact</a></li>
</ul>
</nav>
<h3 class="text-muted">A Pilot Project of BioCADDIE</h3>
</div>

<!--<div class="jumbotron">-->


<!--<p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>-->
<!--</div>-->

<div class="row">


<div class="col-md-3" id="leftCol">
<h3>Show results for</h3>
<ul class="nav nav-stacked" id="sidebar">
<li><a href="./result2.htm"><h4>GWAS(<?php echo $query['hits']['total']?>)</h4></a></li>
<li><a href="#"><h4>Other Type of Studys</h4></a></li>


<h3> Refine Your Search</h3>

<form action='result.php' method='get' autocomplete='off'>
<div class="input-group">
<div class="col-lg-12">
<input type="text" class="form-control" placeholder="Search by traits" name='query1'>

<input type="text" class="form-control" placeholder="Search by platforms" name='query2'>

<input type="text" class="form-control" placeholder="Filter by case size" name='query3'>

<div class="input-group-btn">

<!-- <button class="btn btn-default" type="button" value='submit'><a href="./result.htm">Go!</a></button>-->
<input class="btn btn-default" type='submit' value='Search'>
</div><!-- /btn-group -->
</div><!--input-group-->
</form>
</div><!-- /.col-lg-12 -->
</ul>

</div>
<div class="col-md-9">
<?php if (isset($results)) {?>
<h4><?php echo show_current_record_number($offset,$query['hits']['total'])?> of <?php echo $query['hits']['total']?> results for "<?php echo $q?>" and "<?php echo $r?>" with over "<?php echo $s?>" case sizes in <b>GWAS Publications.</b></h4>
<?php if ($query['hits']['total']/300>1){?>
<nav>
<ul class="pagination">

<li>
<a href="result.php?query1=<?php echo $q."&query2=".$r."&query3=".s."&offset=".get_previsoue($offset)?>" aria-label="Previous">
<span aria-hidden="true">&laquo;</span>
</a>
</li>

<?php
    for($i=1;$i<min(300,$query['hits']['total']/300);$i++){
        $offset = $i;?>
<li><a href="result.php?query1=<?php echo $q."&query2=".$r."&query3=".$s."&offset=".get_previsoue($offset)?>"><?php echo $i ?></a></li>
<?php }
    ?>

<li>

<a href="result.php?query1=<?php echo $q."&query2=".$r."&query3=".$s."&offset=".get_next($offset,$query['hits']['total'])?>" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
</a>
</li>

</ul>
</nav>
<?php }?>
<table class="table table-striped">
<thead>
<tr>
<th>PMID</th>
<th>Title</th>
<th>Abstract</th>
</tr>
</thead>
<tbody>
<?php if(isset($results) && count($results)>0){
    for($i=0;$i<min(300,count($results));$i++){
        $r = $results[$i];
        //foreach($results as $r){
        ?>


<tr><td style="color:blue">
<a href="<?php echo "https://www.ncbi.nlm.nih.gov/pubmed/?term=".$r['_id'] ?>">
<u><?php echo $r['_id']; ?></u></a></td>
<td><?php echo $r['_source']['TI']; ?></a></td>
<td><?php echo substr($r['_source']['AB'],0,200).'...'; ?></td>
</tr>
<?php } } ?>
</tbody>
</table>
</div>
<?php } ?>


</div>
<div class="navbar navbar-default navbar-bottom">
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
