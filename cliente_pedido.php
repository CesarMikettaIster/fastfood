<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Food</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            border: 1px solid black;
            padding: 10px;
        }
        .header {
            background-color: #99cc66;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border: 1px solid black;
        }
        .cliente {
            background-color: #dce9cf;
            padding: 15px;
            border: 1px solid black;
        }
        .cliente label {
            display: block;
            margin-bottom: 10px;
        }
        .menu {
            display: flex;
            background-color: #b0c4de;
            padding: 5px;
            border: 1px solid black;
        }
        .menu div {
            padding: 5px;
            background-color: white;
            margin-right: 5px;
            border: 1px solid black;
            cursor: pointer;
        }
        .productos {
            background-color: #c2dbf0;
            padding: 15px;
            border: 1px solid black;
        }
        .producto {
            background-color: #fdf5c2;
            margin: 10px 0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            border: 1px solid black;
        }
        .cantidad {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 10px;
        }
        .cantidad button {
            margin: 2px 0;
        }
        .boton-carrito {
            background-color: blue;
            color: white;
            padding: 5px;
            text-align: center;
            cursor: pointer;
            width: 100px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">fast food</div>

        <div class="cliente">
            <p><strong>Cliente</strong></p>
            <label>Nombre: <input type="text"></label>
            <label>Identificación: <input type="text"></label>
            <label>Saldo: <input type="text"></label>
        </div>

        <div class="menu">
            <div>combos</div>
            <div>bebida</div>
            <div>carrito de pedido</div>
        </div>

        <div class="productos">
            <div class="producto">
                <div class="cantidad">
                    <span>cantidad</span>
                    <button>+</button>
                    <span>0</span>
                    <button>-</button>
                </div>
                <div>
                    <strong>nombre</strong><br>
                    <small>descripción</small><br>
                    <span>precio</span>
                </div>
                <div class="boton-carrito">añadir a carrito</div>
                <div class="foto">[foto]</div>
            </div>

            <div class="producto">
                <div class="cantidad">
                    <div >
                        <span>cantidad</span>
                        <span>0</span>
                    </div>
                    <div>
                        <button>+</button>
                        <button>-</button>
                    </div>
                    <div class="boton-carrito">añadir a carrito</div>
                </div>
                <div>
                    <strong>nombre</strong><br>
                    <small>descripción</small><br>
                    <span>precio</span>
                </div>
                
                <div class="foto">[foto]</div>
            </div>
        </div>
    </div>

</body>
</html>
