</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>
    <div>
        <div class="container">

            <ul class="navigation">
                <li class="active">
                    <a href="./insertar1GarajesControlador.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Garaje</span>
                    </a>
                </li>
                <li>
                    <a href="./insertar1CochesControlador.php">
                        <span class="icon">
                            <ion-icon name="car-outline"></ion-icon>
                        </span>
                        <span class="text">Coche</span>
                    </a>
                </li>
                <li>
                    <a href="./insertar1PlantasControlador.php">
                        <span class="icon">
                            <ion-icon name="layers-outline"></ion-icon>
                        </span>
                        <span class="text">Planta</span>
                    </a>
                </li>
                <li>
                    <a href="./insertar1PlazasControlador.php">
                        <span class="icon">
                            <ion-icon name="chevron-up-outline"></ion-icon>
                        </span>
                        <span class="text">Plaza</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="apps-outline"></ion-icon>
                            </ion-icon>
                        </span>
                        <span class="text">Otros</span>
                    </a>
                </li>
            </ul>
            <div class="carrusel">
            <div class="content">
            <div class="content-carrusel">
                <figure class="shadow"><img src="https://d1eip2zddc2vdv.cloudfront.net/wor/cover_images/thumbnails/1085/1200x800_1085.jpg?timestamp=1641213912" ></figure>
                <figure class="shadow"><img src="https://cdn.motor1.com/images/mgl/6MlYb/s3/most-expensive-cars.webp" ></figure>
                <figure class="shadow"><img src="https://static.abc.es/media/MM/2022/01/13/chevrolet-corvette-z06-kl1G--1587x900@abc.jpg" ></figure>
                <figure class="shadow"><img src="https://cdn.businessinsider.es/sites/navi.axelspringer.es/public/styles/950/public/media/image/2019/06/aston-martin-dbs.png?itok=7Dw9RZll" ></figure>
                <figure class="shadow"><img src="https://st.depositphotos.com/2200976/2316/i/450/depositphotos_23164702-stock-photo-2-sport-cars-parked-parked.jpg" ></figure>
                <figure class="shadow"><img src="https://media.gq.com.mx/photos/5fb98a49dce777728eac29dd/3:2/w_1962,h_1308,c_limit/autos-de-lujo-baratos.jpg" ></figure>
                <figure class="shadow"><img src="https://www.economistjurist.es/wp-content/uploads/sites/2/2021/11/rolls-royce-boat-tail-7-1200x800-1.jpg" ></figure>
                <figure class="shadow"><img src="https://motor.elpais.com/wp-content/uploads/2022/05/Rolls-Royce-Boat-Tail-Mother-Of-Pearl-38.jpg" ></figure>
                <figure class="shadow"><img src="https://cdn.topgear.es/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2018/08/nuevo-bugatti-divo_8.jpg?itok=MVvmEs8c" ></figure>
            </div>
        </div>


            </div>


        </div>




    </div>





    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let list = document.querySelectorAll('.navigation li');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active');

        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink))
    </script>


</body>

</html>