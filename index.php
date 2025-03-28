<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GFG- Store Data</title>
   </head>
   <body>

   <?php include "components/header.php" ?>

      <center>
         <h1>Storing Form data in Database</h1>
         <form action="insert.php" method="post">
            
<p>
               <label for="ID">ID:</label>
               <input type="number" name="id" id="ID">
            </p>

            
<p>
               <label for="E-mail">E-mail:</label>
               <input type="email" name="email" id="E-mail">
            </p>

            
<p>
               <label for="Platforms">Platforms:</label>
               <input type="text" name="platforms" id="Platforms">
            </p>

            
<p>
               <label for="Region">Region:</label>
               <input type="text" name="region" id="Region">
            </p>

            
<p>
               <label for="Subject">Subject:</label>
               <input type="text" name="subject" id="Subject">
            </p>

<p>
               <label for="Description">Description:</label>
               <input type="text" name="description" id="Description">
            </p>

<p>
               <label for="Status">Status:</label>
               <input type="text" name="status" id="Status">
            </p>

<p>
               <label for="Date">Date:</label>
               <input type="date" name="date" id="Date">
            </p>

            <input type="submit" value="Submit">
         </form>
      </center>
   </body>
</html>