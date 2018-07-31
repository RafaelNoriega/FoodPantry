<head>
  <!-- Standard Meta -->
   <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>
    CSUB Food Pantry AdminLogin 
   </title>
  <link rel="icon" type="image/x-icon" href="../assets/foodpantryassets/FPLOGOI.ico?" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="../Semantic/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/site.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/container.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/header.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/image.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/menu.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="../Semantic/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/form.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/input.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/button.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/list.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/message.css">
  <link rel="stylesheet" type="text/css" href="../Semantic/components/icon.css">

  <script src="../assets/jquery-3.3.1.min.js"></script>
  <script src="../Semantic/components/form.js"></script>
  <script src="../Semantic/components/transition.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/login.css">



  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
