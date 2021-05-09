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
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<a class="btn btn-outline-primary" href="/" role="button">목록으로</a>
			</div><br>
			
			<div class="row">
				<table class="table table-striped" style="text-align: center; border: 1px solid #dddddd">
					<thead>
						<tr>
							<th colspan="2" style="background-color: #eeeeee; text-align: center;">메모 보기</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">제목</th>
							<td>{{$board->b_title}}</td>
						</tr>
						<tr>
							<th scope="row">내용</th>
							<td>{{$board->b_content}}</td>
						</tr>
					</tbody>
				</table><br>	

				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a class="btn btn-primary" href="/update?board={{$board->b_id}}" role="button">수정</a>
					<a class="btn btn-primary" href="/delete?board={{$board->b_id}}" role="button">삭제</a>
				</div>
			</div>
		</div>
	</div>
</body>
