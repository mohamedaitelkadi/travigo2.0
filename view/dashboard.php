<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>DASHBOARD</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="view/style.css">
<style>
/* body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
} */
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn1 {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn1 i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn1 span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 160px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */

/* Modal styles */

</style>
</head>
<body style="background-color:#6e54fa;">
<header>
		<a href="#" class="logo">traviGO</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
        <li><a href="index.php">Home</a></li>
			<li><a href="index.php?action=tour">Tours</a></li>
			<li><a href="index.php?action=about">About</a></li>
			<li><a href="index.php?action=contact">Contact Us</a></li>
			<li><a href="index.php?action=board">Dashboard</a></li>
			<li><a id="loginbutton" href="index.php?action=login" style="display:block">Login</a></li>
			<li><a id="logoutbutton" href="index.php?action=login" style="display:none">Logout</a></li>
		</ul>
	</header>
<div class="container-xl" style="padding-top:100px; ">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Tours</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="index.php?action=add" class="btn1 btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Tour</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>country</th>
						<th>price ($)</th>
						<th>duration (h)</th>
						<th>image</th>
						<th>Actions</th>		
					</tr>
				</thead>
				<tbody>
					<?php foreach($rows as $value){?>
					<tr>
						<td><?=$value['country']?></td>
						<td><?=$value['price']?></td>
						<td><?=$value['duration']?></td>
						<td><img style="width : 30px;" src="img/<?=$value['imagee'] ?>"/></td>
						<td>
							<a href="index.php?action=edit&edit=<?=$value['id_tour']?>" class="edit"><i class="material-icons"  title="Edit">&#xE254;</i></a>
							<a href="index.php?action=delete&id=<?=$value['id_tour']?>" class="delete"><i class="material-icons"  title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<?php } ?>
					
				</tbody>
			</table>
			
		</div>
	</div>        
</div>

	<script type="text/javascript" src="view/js/login.js"></script>
<script type="text/javascript" src="view/js/script.js"></script>

</body>
</html>