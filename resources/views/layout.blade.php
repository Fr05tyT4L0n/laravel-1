<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            --pink-color: #FDAFAB;
            --ligthblue-color: #66dad0;
            --white-color: #FFFFFF;
            --dark-color: #262626;
            --darkligth-color: #363636;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Kanit", serif;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 0;
        }

        .custom-text {
            color: var(--darkligth-color);
            transition: .3s ease all;
        }

        .custom-text:hover {
            color: var(--pink-color);
        }
        
        body{
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        footer{
            margin-top: auto;
        }
    </style>
</head>
<body style="background-color: var(--dark-color);">
    <div style="background-color: var(--ligthblue-color);">
        <div class="container text-center py-3">
            <h2 class="text-white">ทักษ์ดนัย ดวงพร</h2>
        </div>
    </div>

    <nav>
        <ul class="nav d-flex justify-content-center py-2" style="background-color: var(--white-color);">
            <li class="nav-item">
                <a href="{{ route('blog')}}" class="nav-link custom-text">สถานที่ท่องเที่ยว</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about')}}" class="nav-link custom-text">เกี่ยวกับฉัน</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin')}}" class="nav-link custom-text">ผู้ดูแลระบบ</a>
            </li>
        </ul>
    </nav>

  <div class="container mt-5 text-white">
    @yield('content')
  </div>

  <footer class="text-center py-3 underline-none" style="background-color: var(--darkligth-color);">
    <p class="text-white link-underline-opacity-0 mb-0">Copyright &copy; 2025 - Takdanai Duangporn - Allright Reserved.</p>
  </footer>

  <!-- bootstrap 5 js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>