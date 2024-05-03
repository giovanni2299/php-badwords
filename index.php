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
                <textarea name="paragrafo" id="paragrafo" cols="30" rows="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati molestias, nihil laudantium architecto alias minima quam aliquid quis, incidunt, recusandae ratione pariatur vitae quibusdam neque quae rerum beatae qui dolorum sed quidem itaque unde deleniti nemo! Deserunt repellat tenetur, quibusdam possimus porro modi earum perferendis dolores quisquam quam, pariatur vero!</textarea>
            </div>
        </p>
       
        <button>invia</button>
    </form>
</body>
</html>