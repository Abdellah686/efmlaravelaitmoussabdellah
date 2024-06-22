<!DOCTYPE html>
   <html>
   <head>
       <title>Liste des Séjours</title>
   </head>
   <body>
       <h1>Liste des Séjours</h1>
       <table>
           <tr>
               <th>Code</th>
               <th>Date</th>
               <th>Type</th>
               <th>Durée</th>
           </tr>
           @foreach ($sejours as $sejour)
           <tr>
               <td>{{ $sejour->CodeReservation }}</td>
               <td>{{ $sejour->DateSejour }}</td>
               <td>{{ $sejour->TypeSejour }}</td>
               <td>{{ $sejour->DureeSejour }}</td>
           </tr>
           @endforeach
       </table>
   </body>
   </html>
