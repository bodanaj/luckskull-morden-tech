<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.incognitothemes.com/torneo/contact-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 06:40:11 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Designsninja">
<!-- description -->
<meta name="description" content="Torneo is creative agency, corporate, simple and clean template, Based on Bootstrap responsive multipurpose agency and portfolio HTML5 template with 28 unique home page demos">
<!-- keywords -->
<meta name="keywords" content="contact forms, fullscreen, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>luckskull</title>


<!-- Core Style Sheets -->
<link rel="stylesheet" href="assets/css/master.css">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="assets/css/responsive.css">
<!-- Revolution Style Sheets -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

</head>
<body>
<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>number</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->number }}</td>
</tr>
@endforeach
</table>
</body>
</html>
</body>