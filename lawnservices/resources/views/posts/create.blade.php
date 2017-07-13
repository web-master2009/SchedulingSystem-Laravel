<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		<title>jQuery table2excel Demo</title>
        <link rel="stylesheet" href="/lawnservices/resources/views/home/src/bootstrap.css">
        <link href="/lawnservices/resources/views/home/src/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<script src="/lawnservices/resources/views/home/src/ga.js"></script>
    <script src="/lawnservices/resources/views/home/src/ca-pub-2783044520727903.js"></script>
    <script src="/lawnservices/resources/views/home/src/jquery_002.js"></script>
		<script src="/lawnservices/resources/views/home/src/jquery.js"></script>
	</head>
	<body>
    <div class="container" style="margin-top:150px;">
    <h1>jQuery table2excel Demo</h1>
		<table class="table" id="table2excel">
      <thead>
        <tr class="noExl">
          <th>#</th>
          <th>Column heading</th>
          <th>Column heading</th>
          <th>Column heading</th>
        </tr>
        <tr>
          <th>#</th>
          <th>Column heading</th>
          <th>Column heading</th>
          <th>Column heading</th>
        </tr>
      </thead>
      <tbody>
        <tr class="active">
          <td>1</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="success">
          <td>3</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="info">
          <td>5</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="warning">
          <td>7</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <td>8</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="danger">
          <td>9</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
      </tbody>
    </table>
        <button class="btn btn-success">Export</button></div>
		<script>
			$(function() {
				$("button").click(function(){
				$("#table2excel").table2excel({
					exclude: ".noExl",
    				name: "Excel Document Name"
				}); 
				 });
			});
		</script><script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body></html>
<div class="form-group" id="data_1">
                                <label class="font-normal">Simple data input format</label>
                                <div class="input-group date">
                                    <span class="input-group-addon" style=""><i class="fa fa-calendar"></i></span><input class="form-control" value="03/04/2014" type="text">
                                </div>
                            </div>