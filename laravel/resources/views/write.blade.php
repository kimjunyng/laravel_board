<!doctype html>
<html lang="ko" >

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container"><br><br><br><br>
		<div class="container">
			<div class="row">
				<form method="post" action="/">
				@csrf
					<table class="table table-striped" style="text-align: center; border: 1px solid #dddddd">
						<thead>
							<tr>
								<th colspan="2" style="background-color: #eeeeee; text-align: center;">메모 작성</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" class="form-control" placeholder="글 제목" id="b_title" name="b_title" maxlength="50"/></td>
							</tr>
							<tr>
								<td><textarea class="form-control" placeholder="글 내용" id="b_content" name="b_content" maxlength="2048" style="height: 350px;"></textarea></td>
							</tr>
						</tbody>
					</table><br>	
			
					<div class="d-grid gap-2 d-md-flex justify-content-md-end">
						<input type="submit" class="btn btn-primary pull-right" value="작성" />
					</div>
				</form>
			</div>
		</div>
	</div>
</body>