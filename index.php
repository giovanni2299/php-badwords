<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- CREO IL MIO FORM E LO COLLEGO AL ALTRO FOGLIO DOVE VISUALIZARE IL MESSAGGIO  -->
    <form action="./server.php">
        <p>
            <!-- il nome del for deve coincidere con name e id all interno del input  -->
            <!-- <label for="message">mesaggio</label>
            <input type="text" name="message" id="message" placeholder="mandaci un messaggio " > -->
            <div>
                <div>
                    <label for="paragrafo">paragrafo</label>

                </div>
                <textarea name="paragrafo" id="paragrafo" cols="30" rows="10"></textarea>
                
                <div>
                    <label for="censure">inserisci la censura: </label>
                    <input type="text" id="censure" name="censure" placeholder="inserisci la/e parola/e da censurare">
                </div>
            </div>
        </p>
       
        <button>invia</button>
    </form>
</body>
</html>