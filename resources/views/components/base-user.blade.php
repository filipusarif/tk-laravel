<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
  />
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        },
        container: {
          padding: {
            DEFAULT: '1rem',
            sm: '2rem',
            lg: '4rem',
            xl: '5rem',
            '2xl': '6rem',
          },
        },
        fontFamily: {
          'FiraCode' : ['Londrina Solid', 'serif'],
        },
      }
    }
  </script>
  <style>
    .carousel-indicator-active {
        background-color: #4B5563;
    }

    body{
      font-family: "Londrina Solid", serif;
    }
    .bold {
  font-weight: bold !important; /* atau 700 */
}

.extrabold {
  font-weight: 800 !important; /* sesuai dengan Extra Bold */
}

.medium {
  font-weight: 500 !important; /* sesuai dengan Medium */
}

.card {
      transition: transform 0.3s ease-in-out;
    }
    .card:hover {
      transform: rotate(0deg);
    }
    .tilt-1 {
      transform: rotate(-3deg);
    }
    .tilt-2 {
      transform: rotate(-5deg);
    }
    .tilt-3 {
      transform: rotate(3deg);
    }
    .tilt-4 {
      transform: rotate(5deg);
    }

    .content-active {
            display: block;
        }

        .content-hidden {
            display: none;
        }
</style>

</head>
<body>
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
        function showContent(id) {
            const contents = document.querySelectorAll('main > div');
            contents.forEach(content => {
                content.classList.add('content-hidden');
                content.classList.remove('content-active');
            });

            const activeContent = document.getElementById(id);
            activeContent.classList.add('content-active');
            activeContent.classList.remove('content-hidden');
        }
    </script>
</body>
</html>