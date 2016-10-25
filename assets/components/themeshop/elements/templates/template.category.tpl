<!DOCTYPE html>
<html>
	<head>
		[[$head]]
	</head>
	<body>
		[[$navbar]]
		<div class="container">
			[[$crumbs]]
			<div id="content" class="inner">
				[[!pdoPage?
                    &element=`msProducts`
                ]]
                [[!+page.nav]]
			</div>
			[[$footer]]
		</div>
	</body>
</html>
