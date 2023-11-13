
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .modal-none{
        display: none;
    }

    .modal-block{
        display: block;
        position: absolute;
        top: 80px;
        z-index: 9999;
    }

    .overlay{
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.75);
        z-index: 9998;
    }
</style>


<title>Microblog</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/plugins/emoji/ui/trumbowyg.emoji.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 


<!-- <link rel="stylesheet" href="../css/style.css"> -->

</head>
<body id="admin" class="d-flex flex-column h-100 bg-light bg-gradient">
    
<header id="topo" class="border-bottom sticky-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
  <div class="container">
    <h1><a class="navbar-brand" href="panel"><i class="bi bi-unlock"></i> Admin | Blog</a></h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="panel">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin-profile">Meu perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categories">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users">Usuários</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="create-posts">Novo Post</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="posts-list">Publicações</a>
            </li>

            <li class="nav-item">
                <a class="nav-link fw-bold" href="logout"> <i class="bi bi-x-circle"></i> Sair</a>
            </li>
        </ul>

    </div>
  </div>
</nav>

</header>

<main class="flex-shrink-0">
    <div class="container">

    